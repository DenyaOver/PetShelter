document.getElementById('material').addEventListener('change', function(){
    let isDog = (this.options[this.selectedIndex].classList.contains("dog"));
    let isCat = (this.options[this.selectedIndex].classList.contains("cat"));
    let isNews = (this.options[this.selectedIndex].classList.contains("news"));
    let isUrgentCase = (this.options[this.selectedIndex].classList.contains("urgentCase"));
    document.getElementById('dog').style.display = isDog ? "block" : "none";
    document.getElementById('cat').style.display = isCat ? "block" : "none";
    document.getElementById('news').style.display = isNews ? "block" : "none";
    document.getElementById('urgentCase').style.display = isUrgentCase ? "block" : "none";
});