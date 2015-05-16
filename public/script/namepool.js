var NAMEPOOL = function() {

  var LISTLEN = SYLLABLES.length;

  draw = function() {
    var x, y1, y2;
    x = Math.floor(Math.random() * 2);
    y1 = Math.floor(Math.random() * LISTLEN);
    y2 = Math.floor(Math.random() * LISTLEN);
    return SYLLABLES[y1] + SYLLABLES[y2];
  };
    
  return {
    'draw': draw
  }

}();
