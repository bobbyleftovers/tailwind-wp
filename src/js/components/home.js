import { getCookie, setCookie, checkCookie } from '../lib/utils'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'
import { homeAnimationCookie, homeAnimationDuration, homeAnimationDelay } from '../lib/constants'

class Home {
  constructor(el) {
    gsap.registerPlugin(ScrollTrigger)
    this.el = el
    this.heroAnimation = false
    this.cname = 'hero'
    this.cval = getCookie(this.cname)
    this.button = el.querySelector('.modal__accept')
    this.date = new Date()
    this.date.setTime(this.date.getTime() + (30 * 24 * 60 * 60))
    this.heroText = this.el.querySelectorAll('.hero-animated-text')
    this.videoWrap = el.querySelector('.hero-video')
    this.scrollSection = this.el.querySelector('.scroll-over')
    // this.scrollVideo = this.el.querySelector('.scroll-over__video')
    this.scrollFrame = this.el.querySelector('.scroll-over__frame')
    this.scrollVideo = this.el.querySelector('.scroll-over__video')
    this.scrollContent = this.el.querySelector('.scroll-over__content')
    this.scrollLeftCurtain = this.el.querySelector('.scroll-over__curtain--left')
    this.scrollRightCurtain = this.el.querySelector('.scroll-over__curtain--right')
    this.scrollBackground = this.el.querySelector('.scroll-over__bg')

    // panel panels
    this.panelButtons = el.querySelectorAll('.panel__btn')
    this.panelContents = el.querySelectorAll('.panel__content')

    setTimeout(() => {
      this.init()
    }, 350)
  }

  init() {
    if(getCookie(homeAnimationCookie) == 'true') {
      // animation is done
      this.videoWrap.classList.remove('h-screen')
      this.videoWrap.classList.add('h-s80')
      this.heroText[0].classList.add('hidden')
      this.heroText[1].classList.remove('opacity-0')
      this.heroText[1].classList.add('opacity-100')
      this.setupScrollTrigger()
    } else {
      this.buildHeroAnimation()
      this.heroAnimation.play()

      this.handleCookie()
    }

    // panel content in scrollover area
    this.panelButtons.forEach(btn => btn.addEventListener('click', () => this.setActivePanel(btn)))
  }

  handleCookie() {
    setCookie(this.cname, 'true')
  }

  buildHeroAnimation() {
    this.heroAnimation = gsap.timeline({delay: homeAnimationDelay, paused: true, onComplete: () => {
      this.heroText[0].classList.add('hidden')
    }})
    // this.heroAnimation.set(this.videoWrap, {height: '100vh'})
    this.heroAnimation.to(
      this.videoWrap,
      {
        height: '80vh',
        duration: homeAnimationDuration,
        onComplete: () => {
          this.setupScrollTrigger()
        }
      },
      'main'
    )
    gsap.set(this.heroText[1], {y: 300}, 'main')
    this.heroAnimation.to(this.heroText[0], {opacity: 0, y: -300, duration: homeAnimationDuration}, '<main')
    this.heroAnimation.to(this.heroText[1], {opacity: 1, y: 0, duration: homeAnimationDuration}, '<main')
  }

  setupScrollTrigger() {
    // some basic animations to call on scroll events
    const curtainTl1 = gsap.timeline({paused: true})
    const curtainTl2 = gsap.timeline({paused: true})
    const bkTl = gsap.timeline({paused: true})

    curtainTl1.to(this.scrollLeftCurtain, {width: 0, duration: 3}, 'A')
    curtainTl1.to(this.scrollRightCurtain, {width: 60, duration: 3}, 'A')
    curtainTl2.to(this.scrollRightCurtain, {width: 0, duration: 1.5}, 'B')
    bkTl.to(this.scrollBackground, {opacity: 0.75, duration: 2})
    
    // start the video (if needed)
    // ScrollTrigger.create({
    //   trigger: this.scrollVideo,
    //   start: 'top center',
    //   onEnter: () => {
    //     this.scrollVideo.play()
    //   },
    // })

    // open the "curtains"
    ScrollTrigger.create({
      trigger: this.scrollSection,
      start: 'top 80%',
      onEnter: () => {
        curtainTl1.play()
      }
    })

    // image/video frame
    ScrollTrigger.create({
      trigger: this.scrollFrame,
      pin: true,
      pinSpacing: false,
      start: 'top-=60px',
      end: 'bottom',
      onEnter: () => {
        bkTl.play()
        
      },
      onEnterBack: () => {
        bkTl.reverse()
      },
      onUpdate: self => {
        if(self.progress > 0.3 && !this.scrollRightCurtain.classList.contains('animated')) {
          curtainTl2.play()
          this.scrollRightCurtain.classList.add('animated')
        }
      }
    })

    // content frame
    ScrollTrigger.create({
      trigger: this.scrollContent,
      end: 'bottom+=200',
      pin: true,
      pinSpacing: false,
    })
  }

  setActivePanel(activeBtn) {
    // deactivate all buttons
    this.panelButtons.forEach(btn => {
      btn.classList.remove('border-b-2', 'border-orange', 'text-white')
      btn.classList.add('text-cadet-blue')
    })
    
    // activate clicked button
    activeBtn.classList.remove('text-cadet-blue')
    activeBtn.classList.add('border-b-2', 'border-orange', 'text-white')
  
    // activate selected content
    this.panelContents.forEach(cnt => {
      if(cnt.getAttribute('id') === activeBtn.dataset.panel) {
        cnt.classList.remove('hidden')
      } else {
        cnt.classList.add('hidden')
      }
    })
  }
}

export default el => {
  new Home(el)
}