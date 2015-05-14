var NAMEPOOL = function() {

  var LISTLEN = SYLLABLES.length;

  draw = function() {
    var x, y1, y2, y3;
    x = Math.floor(Math.random() * 2);
    y1 = Math.floor(Math.random() * LISTLEN);
    y2 = Math.floor(Math.random() * LISTLEN);
    if (x == 0) {
        return SYLLABLES[y1] + SYLLABLES[y2];
    } else {
        y3 = Math.floor(Math.random() * LISTLEN);
        return SYLLABLES[y1] + SYLLABLES[y2] + SYLLABLES[y3];
    }
  };
    
  return {
    'draw': draw
  }

}();
