import axios from 'axios';

class CompanyIndex {
  constructor(el) {
    this.el = el;
    this.page = 1;
    this.getRow();

    el.querySelector('.load-more').addEventListener('click', e => {
      this.page++;
      this.getRow();
    });
  }

  getRow() {
    axios.get(`/wp-json/insight/v1/get-companies?page=${this.page}`).then(response => {
      let data = JSON.parse(response.data);
      if (this.page == 1) {
        this.el.querySelector('.results').innerHTML = data.content + this.el.querySelector('.results').innerHTML;
      } else {
        this.el.querySelector('.results').innerHTML += data.content;
      }

    });
  }
}

export default el => {
  new CompanyIndex(el);
}