var sel1 = document.getElementById('sel1');
var sel2 = document.getElementById('sel2');

var list = {
    'Jakarta' : 
    `<option disabled selected>Kota</option>
    <option>Jakarta Pusat</option>
    <option>Jakarta Barat</option>
    <option>Jakarta Selatan</option>
    <option>Jakarta Timur</option>
    <option>Jakarta Utara</option>`,
    
    'Banten' :
    `<option disabled selected>Kota</option>
    <option>Tangerang</option>
    <option>Tangerang Selatan</option>
    <option>Serang</option>
    <option>Cilegon</option>
    <option>Merak</option>`,

    'Jawa Barat' :
    `<option disabled selected>Kota</option>
    <option>Bogor</option>
    <option>Bandung</option>
    <option>Depok</option>
    <option>Sukabumi</option>
    <option>Cirebon</option>`,

    'Sumatera Barat' :
    `<option disabled selected>Kota</option>
    <option>Padang</option>
    <option>Padang Panjang</option>
    <option>Bukittinggi</option>
    <option>Pariaman</option>
    <option>Batusangkar</option>`
}

function giveSelection(selValue) {
    sel2.innerHTML = list[selValue];
}

function display(val2){
    var val1 = sel1.value;
    var para = document.getElementById('para');
    para.innerText = `Pada provinsi ${val1} ada kota ${val2}`;
}

function changeTheme(){
    var element1 = document.body;
    var element2 = document.getElementById('button');
    element1.classList.toggle("dark");
    element2.classList.toggle("light");
}
