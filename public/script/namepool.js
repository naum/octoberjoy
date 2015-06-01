var NAMEPOOL = function() {

  var 
    capitalize, draw, 
    LISTLEN = SYLLABLES.length;

  capitalize = function(str) {
    return str[0].toUpperCase() + str.slice(1);
  }

  draw = function() {
    var x, y1, y2;
    x = Math.floor(Math.random() * 2);
    y1 = Math.floor(Math.random() * LISTLEN);
    y2 = Math.floor(Math.random() * LISTLEN);
    return capitalize(SYLLABLES[y1] + SYLLABLES[y2]);
  };
    
  return {
    'draw': draw
  }

}();
