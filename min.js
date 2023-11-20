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
    }
    ;
    e.preventDefault(),
    setTimeout(t, 450)
}
);



document.getElementById('10rst').addEventListener('click', e => {
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

    fetch("g10.json")
    .then(function(response) {
      return response.json(); // parse the JSON file
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
      //g10.push(ber1)

      for(i = 0; i < g10.length; i++) {
        d = i+1
        //fina.pop();
        //g10[i] = '<tr><td class="thin">' + d + "</td><td>" + g10[i] + "</td></tr>"
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
// By Aj Acosta
