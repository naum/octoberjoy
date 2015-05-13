var NAMEPOOL = function() {

  var WORDLISTLEN = DICTWORDS.length;

  draw = function() {
    var i, x, y1, y2, y3;
    x = Math.floor(Math.random() * 2);
    y1 = Math.floor(Math.random() * WORDLISTLEN);
    y2 = Math.floor(Math.random() * WORDLISTLEN);
    y3 = Math.floor(Math.random() * WORDLISTLEN);
    if (x == 0) {
      return DICTWORDS[y1] + DICTWORDS[y2];
    } else {
      return DICTWORDS[y1] + DICTWORDS[y2] + DICTWORDS[y3];
    }
  };
    
  return {
    'draw': draw
  }

}();
