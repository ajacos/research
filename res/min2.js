let slovin = (N, e) => {
    let n = N/(1+N*e*e)
     n = Math.round(n)
    return n
}

console.log(slovin(334, 0.05))

window.onbeforeunload = () => {
    return "Are you sure you want to close this tab?";
}

let level = document.getElementById('level')
let addlevel = document.getElementById('addlevel')
let addlevel2 = document.getElementById('addlevel2')
let level1 = document.getElementById('level1')
let level2 = document.getElementById('level2')
let secs = document.getElementById('secs')
let pop = document.getElementById('pop')
let sam = document.getElementById('sam')
let err = document.getElementById('err')
let remlevel1 = document.getElementById('remlevel1')
let remlevel2 = document.getElementById('remlevel2')
let sub = document.getElementById('submit')
let frm = document.getElementById('frm')
level.selectedIndex = -1
level1.selectedIndex = -1
level2.selectedIndex = -1
level.addEventListener('input', () => {
    document.getElementById('lopt1').removeAttribute('hidden')
    document.getElementById('lopt1').removeAttribute('disabled')
    document.getElementById('lopt2').removeAttribute('hidden')
    document.getElementById('lopt2').removeAttribute('disabled')
    document.getElementById('lopt3').removeAttribute('hidden')
    document.getElementById('lopt3').removeAttribute('disabled')
    document.getElementById('lopt4').removeAttribute('hidden')
    document.getElementById('lopt4').removeAttribute('disabled')
    level1.selectedIndex = -1
    level2.selectedIndex = -1
    level2.classList.add('hide')
    level2.classList.remove('show')
    remlevel1.classList.add('hide')
    remlevel1.classList.remove('show')
    remlevel2.classList.add('hide')
    remlevel2.classList.remove('show')
    if (level.value == "0" || !level.value) 
        level1.classList.add('hide'),
        level1.classList.remove('show'),
        level1.value = "0",
        level2.classList.add('hide'),
        level2.classList.remove('show'),
        level2.value = "0",
        addlevel.classList.add('hide'),
        addlevel.classList.remove('show'),
        addlevel2.classList.add('hide'),
        addlevel2.classList.remove('show'),
        sub.classList.add('hide'),
        sub.classList.remove('show')
    else if (level.value == "5")
        level1.classList.add('hide'),
        level1.classList.remove('show'),
        level1.value = "0",
        level2.classList.add('hide'),
        level2.classList.remove('show'),
        level2.value = "0",
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        addlevel.classList.add('hide'),
        addlevel.classList.remove('show'),
        addlevel2.classList.add('hide'),
        addlevel2.classList.remove('show'),
        sub.classList.add('show'),
        sub.classList.remove('hide')
    else
        level1.classList.add('hide'),
        level1.classList.remove('show'),
        addlevel.classList.add('show'),
        addlevel.classList.remove('hide'),
        addlevel2.classList.add('hide'),
        addlevel2.classList.remove('show'),
        sub.classList.add('show'),
        sub.classList.remove('hide')
})

level1.addEventListener('input', () => {
    document.getElementById('2lopt1').removeAttribute('hidden')
    document.getElementById('2lopt1').removeAttribute('disabled')
    document.getElementById('2lopt2').removeAttribute('hidden')
    document.getElementById('2lopt2').removeAttribute('disabled')
    document.getElementById('2lopt3').removeAttribute('hidden')
    document.getElementById('2lopt3').removeAttribute('disabled')
    document.getElementById('2lopt4').removeAttribute('hidden')
    document.getElementById('2lopt4').removeAttribute('disabled')
    level2.classList.add('hide')
    level2.classList.remove('show')
    remlevel2.classList.add('hide')
    remlevel2.classList.remove('show')
    remlevel1.classList.add('show'),
    remlevel1.classList.remove('hide')
    level2.selectedIndex = -1
    if (level1.value == "0" || !level1.value)
        level2.classList.add('hide'),
        level2.classList.remove('show'),
        level2.value = "0",
        addlevel2.classList.add('hide'),
        addlevel2.classList.remove('show'),
        sub.classList.add('hide'),
        sub.classList.remove('show')
    else 
        addlevel2.classList.add('show'),
        addlevel2.classList.remove('hide'),
        sub.classList.add('show'),
        sub.classList.remove('hide')
})

level2.addEventListener('input', () => {
    if(!level2.value || level2.value == "0")
        sub.classList.add('hide'),
        sub.classList.remove('show')
    else
        sub.classList.add('show'),
        sub.classList.remove('hide')
})


addlevel.addEventListener('click', (e) => {
    addlevel.classList.add('hide')
    addlevel.classList.remove('show')
    remlevel1.classList.add('show')
    remlevel1.classList.remove('hide')
    sub.classList.add('hide'),
    sub.classList.remove('show')
    if (!level.value || level.value == "0") 
        err.classList.add('show'),
        err.classList.remove('hide'),
        err.innerText = "Please select an option above."
    else if (level.value == "5")
        err.innerText = "",
        level1.classList.add('hide'),
        level1.classList.remove('remove'),
        addlevel2.classList.add('hide'),
        addlevel2.classList.remove('show')
    else if (level.value == "1")
        document.getElementById('lopt1').setAttribute('hidden', true),
        document.getElementById('lopt1').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level1.classList.add('show'),
        level1.classList.remove('hide')
    else if (level.value == "2")
        document.getElementById('lopt2').setAttribute('hidden', true),
        document.getElementById('lopt2').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level1.classList.add('show'),
        level1.classList.remove('hide')
    else if (level.value == "3")
        document.getElementById('lopt3').setAttribute('hidden', true),
        document.getElementById('lopt3').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level1.classList.add('show'),
        level1.classList.remove('hide')
    else if (level.value == "4")
        document.getElementById('lopt4').setAttribute('hidden', true),
        document.getElementById('lopt4').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level1.classList.add('show'),
        level1.classList.remove('hide')
})

addlevel2.addEventListener('click', () => {
    addlevel2.classList.add('hide')
    addlevel2.classList.remove('show')
    remlevel1.classList.add('hide')
    remlevel1.classList.remove('show')
    remlevel2.classList.add('show')
    remlevel2.classList.remove('hide')
    sub.classList.add('hide')
    sub.classList.remove('show')
    if (!level1.value || level1.value == "0") 
        err.classList.add('show'),
        err.classList.remove('hide'),
        err.innerText = "Please select an option above."
    else if (level1.value == "1")
        document.getElementById('2lopt1').setAttribute('hidden', true),
        document.getElementById('2lopt1').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level2.classList.add('show'),
        level2.classList.remove('hide')
    else if (level1.value == "2")
        document.getElementById('2lopt2').setAttribute('hidden', true),
        document.getElementById('2lopt2').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level2.classList.add('show'),
        level2.classList.remove('hide')
    else if (level1.value == "3")
        document.getElementById('2lopt3').setAttribute('hidden', true),
        document.getElementById('2lopt3').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level2.classList.add('show'),
        level2.classList.remove('hide')
    else if (level1.value == "4")
        document.getElementById('2lopt4').setAttribute('hidden', true),
        document.getElementById('2lopt4').setAttribute('disabled', true),
        err.classList.add('hide'),
        err.classList.remove('show'),
        err.innerText = "",
        level2.classList.add('show'),
        level2.classList.remove('hide')
    if (level.value == "1")
        document.getElementById('2lopt1').setAttribute('hidden', true),
        document.getElementById('2lopt1').setAttribute('disabled', true)
    else if (level.value == "2")
        document.getElementById('2lopt2').setAttribute('hidden', true),
        document.getElementById('2lopt2').setAttribute('disabled', true)
    else if (level.value == "3")
        document.getElementById('2lopt3').setAttribute('hidden', true),
        document.getElementById('2lopt3').setAttribute('disabled', true)
    else if (level.value == "4")
        document.getElementById('2lopt4').setAttribute('hidden', true),
        document.getElementById('2lopt4').setAttribute('disabled', true)
})

remlevel1.addEventListener('click', () => {
    level1.selectedIndex = -1
    level2.selectedIndex = -1
    level1.classList.add('hide')
    level1.classList.remove('show')
    level2.classList.add('hide')
    level2.classList.remove('show')
    addlevel2.classList.add('hide')
    addlevel2.classList.remove('show')
    remlevel1.classList.add('hide')
    remlevel1.classList.remove('show')
    addlevel.classList.add('show')
    addlevel.classList.remove('hide')
})

remlevel2.addEventListener('click', () => {
    level2.selectedIndex = -1
    remlevel1.classList.add('show')
    remlevel1.classList.remove('hide')
    level2.classList.add('hide')
    level2.classList.remove('show')
    addlevel2.classList.add('hide')
    addlevel2.classList.remove('show')
    remlevel2.classList.add('hide')
    remlevel2.classList.remove('show')
    addlevel2.classList.add('show')
    addlevel2.classList.remove('hide')
})

sub.addEventListener('click', (e) => {
    e.preventDefault()
    let answer = confirm('Are you sure this is your final query?\nYour group is only limited to 1 use.\nThis action is irrevocable.');
    if(answer == true) {
        let http = new XMLHttpRequest();
        let url = 'updateacode.php';
        let params = `a_code=${document.getElementById("acode").value}`;
        http.open('POST', url, true);
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = () => {
            if(http.readyState == 4 && http.status == 200) {
                console.log('Updated')
                frm.classList.add('hide')
            }
        }
        http.send(params)       
    } else { 
        undefined
    }
})


// By Aj Acosta