document.getElementById("submit").addEventListener("click", e=>{
    let t = ()=>{
        let e = document.getElementById("tb")
          , t = e.value.replace(/^\s*$/gm, "").trim();
        t = t.split(/\r\n|\n\r|\r|\n/).length;
        let n = document.getElementById("num").value;
        if (n <= t && 0 != n) {
            let l = []
              , mm = [], r = e.value.toString();


            for (i = 0,
                r = r.split(/\r\n|\n\r|\r|\n/); i < n; i++) {
                    let d = i + 1;
                    mm.push(r);
                }

                console.log(mm);
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
// By Aj Acosta
