var UBA = function() {

  var 
    batterstat = {},
    clubs = {},
    freeagents = [], 
    keymark,
    pitcherstat = {},
    schedule = [],
    season,
    standings = {},
    genesis, report;

  genesis = function() {
    var c, m, n;
    for (c = 0; c < 32; c += 1) {
      for (m = 0; m < 9; m += 1) {
        n = NAMEPOOL.draw();
        console.log(n);
        freeagents.push(n);
      }
    }
  };

  report = function() {
    var 
      f,
      linetotal = freeagents.length,
      reportlines = [];
    for (f = 0; f < linetotal; f += 1) {
      reportlines.push(freeagents[f]);
    }
    return reportlines.join("<br>\n");
  }

  return {
    'freeagents': freeagents,
    'genesis': genesis,
    'report': report
  }

}();
