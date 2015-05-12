var NAMEPOOL = function() {

  var 
    POOLSIZE = 1000,
    draw, replenish,
    namelist = [];

  draw = function() {
    if (namelist.length == 0) {
      replenish();
    }
    namelist.pop();
  };

  replenish = function() {
    $.ajax('/words.txt', { 
      async: false,
      success: function(c) {
        var i, w1, w2, wordlist = c.split("\n");
        for (i = 0; i < POOLSIZE; i += 1) {
          w1 = wordlist[Math.floor(Math.random() * wordlist.length)];
          w2 = wordlist[Math.floor(Math.random() * wordlist.length)];
          namelist.push(w1 + w2);
        }
      }
    });
  };
    
  return {
    'draw': draw
  }

}();
