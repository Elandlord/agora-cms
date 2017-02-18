export default class Next {
  constructor() {
    this.counter = 0;
  }

  boot(objectArray) {
    this.objectArray = objectArray;
    this.length = objectArray.length;
    this.objectArray = objectArray;
  }

  next() {
    if(this.counter < this.length) {
      this.counter += 1;
    }
  }

  attribute(attribute) {
    console.log(attribute);
    if(this.objectArray.length !== 0) {
      if(this.objectArray[this.counter] !== 'undefined') {
        return this.objectArray[this.counter][attribute];
      }
    }

    return 'no tekst found';
  }

}