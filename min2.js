document.getElementById("submit").addEventListener("click", e=>{
    let t = ()=>{
        let e = document.getElementById("tb")
          , t = e.value.replace(/^\s*$/gm, "").trim();
        t = t.split(/\r\n|\n\r|\r|\n/).length;
        let n = document.getElementById("num").value;
        if (n <= t && 0 != n) {
            let l = [], r = e.value.toString();

            for (i = 0,
            r = r.split(/\r\n|\n\r|\r|\n/); i < n; i++) {
                let d = i + 1;
                l.push('<tr><td class="thin">' + d + "</td><td>" + r.splice(r.length * Math.random() | 0, 1)[0] + "</td></tr>")
            }
            for (document.getElementById("textn").innerHTML = '<tr><th class="thin">No.</th><th>Name:</th></tr>' + l.join(""),
            document.getElementById("textp").innerHTML = "",
            document.getElementById("addbtn").innerHTML = '<br id="rmvbr"><button id="remove">Remove chosen names</button>',
            i = 0; i < l.length; i++)
                l[i] = l[i].replaceAll('<tr><td class="thin">', "").replaceAll("<td>", "").replaceAll("</td>", "").replaceAll("</tr>", "").replaceAll(/[0-9]/g, "");
            let a = e.value.split(/\r\n|\n\r|\r|\n/).filter(function(e) {
                return !l.includes(e)
            });
            document.getElementById("remove").addEventListener("click", t=>{
                e.value = a.join("\n"),
                document.getElementById("textp").innerHTML = "Removed chosen names.",
                document.getElementById("remove").remove(),
                document.getElementById("rmvbr").remove()
            }
            )
        } else
            0 == n ? (document.getElementById("textp").innerHTML = "The amount of names you want to get cannot be equal to 0, please try again.",
            document.getElementById("textn").innerHTML = "",
            document.getElementById("addbtn").innerHTML = "") : (document.getElementById("textp").innerHTML = "The names entered is less than the specified amount, please try again.",
            document.getElementById("textn").innerHTML = "",
            document.getElementById("addbtn").innerHTML = "")

        if(e.value === "/clear") document.getElementById("textp").innerHTML = "",  document.getElementById("textn").innerHTML = "", document.getElementById("addbtn").innerHTML = "", document.getElementById("num").innerHTML = '<input type="number" name="number" id="num" placeholder="Amount you want to get">', e.value = "";
    }
    ;
    e.preventDefault(),
    setTimeout(t, 450)
}
);

function shuffleWithoutRepetition(array) {
    var i, j, t;
    for (i = 0; i < array.length; i++) {
      j = Math.floor(Math.random() * array.length);
      if (j != i) {
        t = array[i];
        array[i] = array[j];
        array[j] = t;
      } else {
        while (j == i) {
          j = Math.floor(Math.random() * array.length);
        }
        t = array[i];
        array[i] = array[j];
        array[j] = t;
      }
    }
    return array;
}

document.getElementById('10rst').addEventListener('click', e => {
    fetch("jsons/g10.json")
    .then(function(response) {
      return response.json(); 
    })
    .then(function(data) {
      let 
      arc = data.archimedes,
      ber = data.bernoulli,
      edi = data.edison,
      ein = data.einstein,
      far = data.faraday,
      max = data.maxwell,
      newt = data.newton,
      pas = data.pascal,
      tho = data.thomson,
      g10 = []

      
      let 
      arc1 = shuffleWithoutRepetition(arc).splice(0,20),
      ber1 = shuffleWithoutRepetition(ber).slice(0, 19)
      edi1 = shuffleWithoutRepetition(edi).slice(0, 20),
      ein1 = shuffleWithoutRepetition(ein).slice(0, 21)
      far1 = shuffleWithoutRepetition(far).slice(0, 20)
      max1 = shuffleWithoutRepetition(max).slice(0, 21),
      newt1 = shuffleWithoutRepetition(newt).slice(0, 20),
      pas1 = shuffleWithoutRepetition(pas).slice(0, 20),
      tho1 = shuffleWithoutRepetition(tho).slice(0, 21),
      final = []

      g10 = g10.concat(arc1).concat(ber1).concat(edi1).concat(ein1).concat(far1).concat(max1).concat(newt1).concat(pas1).concat(tho1)

      for(i = 0; i < g10.length; i++) {
        d = i+1
        if(i <= 19) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Archimedes</td></tr>"
        } else if (i <= 38 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Bernoulli</td></tr>"
        } else if (i <= 58 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Edison</td></tr>"
        } else if (i <= 79 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Einstein</td></tr>"
        } else if (i <= 99 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Faraday</td></tr>"
        } else if (i <= 120 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Maxwell</td></tr>"
        } else if (i <= 140 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Newton</td></tr>"
        } else if (i <= 160 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Pascal</td></tr>"
        } else if (i <= 181 ) {
            g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td><td class='sec'>Thomson</td></tr>"
        }

      }
    
      document.getElementById("textn").innerHTML = '<tr><th class="thin">No.</th><th>Name:</th><th class="sec">Section:</th></tr>' + g10.join(''),
      document.getElementById("textp").innerHTML = ""
      document.getElementById("addbtn").innerHTML = ""
      

        
    })
})

document.getElementById('9rst').addEventListener('click', e => {
    fetch("jsons/g9.json")
    .then(function(response) {
      return response.json(); 
    })
    .then(function(data) {
      let 
      arr = data.arrhenius,
      boy = data.boyle,
      cur = data.curie,
      dal = data.dalton,
      fra = data.franklin,
      lav = data.lavoisier,
      men = data.mendeleev,
      pau = data.pauling,
      rut = data.rutherford,
      g9 = []

      
      let 
      arr1 = shuffleWithoutRepetition(arr).splice(0,14),
      boy1 = shuffleWithoutRepetition(boy).slice(0, 21)
      cur1 = shuffleWithoutRepetition(cur).slice(0, 21),
      dal1 = shuffleWithoutRepetition(dal).slice(0, 22)
      fra1 = shuffleWithoutRepetition(fra).slice(0, 13)
      lav1 = shuffleWithoutRepetition(lav).slice(0, 21),
      ment1 = shuffleWithoutRepetition(men).slice(0, 22),
      pau1 = shuffleWithoutRepetition(pau).slice(0, 22),
      rut1 = shuffleWithoutRepetition(rut).slice(0, 22),
      final = []

      g9 = g9.concat(arr1).concat(boy1).concat(cur1).concat(dal1).concat(fra1).concat(lav1).concat(ment1).concat(pau1).concat(rut1)

      for(i = 0; i < g9.length; i++) {
        d = i+1
        if(i <= 13) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Arrhenius</td></tr>"
        } else if (i <= 34 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Boyle</td></tr>"
        } else if (i <= 55 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Curie</td></tr>"
        } else if (i <= 77 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Dalton</td></tr>"
        } else if (i <= 90 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Franklin</td></tr>"
        } else if (i <= 111 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Lavoisier</td></tr>"
        } else if (i <= 133 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Mendeleev</td></tr>"
        } else if (i <= 155 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Pauling</td></tr>"
        } else if (i <= 177 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Rutherford</td></tr>"
        }

      }
    
      document.getElementById("textn").innerHTML = '<tr><th class="thin">No.</th><th>Name:</th><th class="sec">Section:</th></tr>' + g9.join(''),
      document.getElementById("textp").innerHTML = ""
      document.getElementById("addbtn").innerHTML = ""
      

        
    })
})

document.getElementById('8rst').addEventListener('click', e => {
    fetch("jsons/g8.json")
    .then(function(response) {
      return response.json(); 
    })
    .then(function(data) {
      let 
      ari = data.aristotle,
      dar = data.darwin,
      fle = data.flmeing,
      hoo = data.hooke,
      jen = data.jenner,
      lin = data.linnaeus,
      mend = data.mendel,
      past = data.pasteur,
      ves = data.vesalius,
      g8 = []

      
      let 
      ari1 = shuffleWithoutRepetition(ari).splice(0,14),
      dar1 = shuffleWithoutRepetition(dar).slice(0, 21)
      fle1 = shuffleWithoutRepetition(fle).slice(0, 21),
      hoo1 = shuffleWithoutRepetition(hoo).slice(0, 22)
      jen1 = shuffleWithoutRepetition(jen).slice(0, 13)
      lin1 = shuffleWithoutRepetition(lin).slice(0, 21),
      mend1 = shuffleWithoutRepetition(mend).slice(0, 22),
      past1 = shuffleWithoutRepetition(past).slice(0, 22),
      ves1 = shuffleWithoutRepetition(ves).slice(0, 22),
      final = []

      g8 = g8.concat(ari1).concat(dar1).concat(fle1).concat(hoo1).concat(jen1).concat(lin1).concat(mend1).concat(past1).concat(ves1)

      for(i = 0; i < g8.length; i++) {
        d = i+1
        if(i <= 13) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Arrhenius</td></tr>"
        } else if (i <= 34 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Boyle</td></tr>"
        } else if (i <= 55 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Curie</td></tr>"
        } else if (i <= 77 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Dalton</td></tr>"
        } else if (i <= 90 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Franklin</td></tr>"
        } else if (i <= 111 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Lavoisier</td></tr>"
        } else if (i <= 133 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Mendeleev</td></tr>"
        } else if (i <= 155 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Pauling</td></tr>"
        } else if (i <= 177 ) {
            g9[i] = '<tr><td class="thin">' + d + "</td><td>" + g9[i] + "</td><td class='sec'>Rutherford</td></tr>"
        }

      }
    
      document.getElementById("textn").innerHTML = '<tr><th class="thin">No.</th><th>Name:</th><th class="sec">Section:</th></tr>' + g9.join(''),
      document.getElementById("textp").innerHTML = ""
      document.getElementById("addbtn").innerHTML = ""
      

        
    })
})
// By Aj Acosta
