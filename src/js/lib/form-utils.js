// return true if number meets minimum length and value requirements
const isValidNumber = (num, length = false, min = 1) => {
  return length ? num && num.length === length && num >= min : num && num >= min
}

const isValidPhone = str => {
  // strip all non-numeric chars
  const value = str.replace(/\D/g,'')
  return value.length === 10
}

// return true if string has at least 1 number and 1 letter in it
const isValidAddress = str => {
  return /\d/.test(str) && /[a-zA-Z]/g.test(str)
}

// return true if string has at least 1 letter
const isValidStr = str => {
  return str.length >= 1
}

// return true if string is an email address
const isValidEmail = str => {
  const regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(String(str).toLowerCase())
}

const formatPhone = str => {
  let formattedValue = ''

    // strip all nnon-numeric chars
    const value = str.replace(/\D/g,'')

    for(let i = 0; i < value.length; i++){
      if(i === 0) formattedValue += '('
      if(i === 3) formattedValue += ')'
      if(i === 6) formattedValue += '-'
      formattedValue += value[i]
    }

    return formattedValue
}

export {
  isValidNumber,
  isValidAddress,
  isValidStr,
  isValidEmail,
  isValidPhone,
  formatPhone
}