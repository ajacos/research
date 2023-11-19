document.getElementById('submit').addEventListener(
    'click',
    e => {
      function t() {
        let e = document.getElementById('tb'),
        t = e.value.replace(/^\s*$/gm, '').trim();
        t = t.split(/\r\n|\n\r|\r|\n/).length;
        let n = document.getElementById('num').value;
        if (n <= t && 0 != n) {
          let l = [],
          na = []
          r = e.value;
          
          for (i = 0, r = r.split(/\r\n|\n\r|\r|\n/); i < n; i++) {
            let a = i + 1;
            l.push(
              '<tr><td class="thin">' + a + '</td><td>' + r.splice(r.length * Math.random() | 0, 1) [0] + '</td></tr>'
            )
          }

          document.getElementById('textn').innerHTML = '<tr><th class="thin">No.</th><th>Name:</th></tr>'+l.join(''),
          document.getElementById('textp').innerHTML = ''
          document.getElementById('addbtn').innerHTML = '<br><button id="remove">Remove chosen names</button>';


          for(i = 0; i < l.length; i++) {
            l[i] = l[i].replaceAll('<tr><td class="thin">', "").replaceAll('<td>', "").replaceAll('</td>', "").replaceAll('</tr>', "").replaceAll(/[0-9]/g, "");
          }

          let tba = e.value.split(/\r\n|\n\r|\r|\n/);
          let nar = tba.filter(function(value) {
            return !l.includes(value); 
          });

          document.getElementById('remove').addEventListener('click', () => {
            e.value = nar.join("\n");
          })
          
        } else 0 == n ? (
          document.getElementById('textp').innerHTML = 'The amount of names you want to get cannot be equal to 0, please try again.',
          document.getElementById('textn').innerHTML = '',
          document.getElementById('addbtn').innerHTML = ''

        ) : (
          document.getElementById('textp').innerHTML = 'The names entered is less than the specified amount, please try again.',
          document.getElementById('textn').innerHTML = '',
          document.getElementById('addbtn').innerHTML = ''

        )
      }
      e.preventDefault(),
      setTimeout(t, 450)
    }
  ); // By Aj Acosta
  // By Aj Acosta
  