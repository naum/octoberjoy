var NAMEPOOL = function() {

  var WORDLISTLEN = DICTWORDS.length;

  draw = function() {
    var x, y1, y2;
    x = Math.floor(Math.random() * 2);
    y1 = Math.floor(Math.random() * WORDLISTLEN);
    y2 = Math.floor(Math.random() * WORDLISTLEN);
    return DICTWORDS[y1] + DICTWORDS[y2];
  };
    
  return {
    'draw': draw
  }

}();
