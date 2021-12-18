var abodemen;
var tarif;
var pajak;
var subtotal = 0;
var total;

var daftar_jumlah = [];
var daftar_tarif = [];
var daftar_abodemen = [];
var daftar_sub = [];


var x = 0;

function calculation(){
    var nama = document.getElementById("nama").value;
    var hari = document.getElementById("pemakaian").value;
    var kat = document.getElementById("kategori");
    var value = kat.value;

    if (nama == ""){
        alert("Kolom nama belum diisi");
        return false;
    }

    if (hari == 0){
        alert("Kolom jumlah pemakaian belum diisi");
        return false;
    }
    
    if (hari < 31){
        if (value == "sosial"){
            abodemen = 10000;
            tarif = 300;
            pajak = 0;
            var row = document.getElementById("body");
            row.innerHTML = "";
            for (let i = 1; i <= hari; i++) {

                row.innerHTML += `
                <tr>
                   <td>${i}</td>
                   <td>${i * tarif}</td>
                   <td>${abodemen}</td>
                   <td>${abodemen + i * tarif}</td>
               </tr>
                `

                daftar_jumlah[x] = i;
                daftar_tarif[x] = tarif;
                daftar_abodemen[x] = abodemen;
                daftar_sub[x] = abodemen + daftar_tarif[x];

                subtotal = daftar_sub[x];
                
                x++;
            }
            var sub = document.getElementById("sub");
            sub.innerHTML = subtotal;
            var Pajak = document.getElementById("pajak");
            Pajak.innerHTML = (subtotal * pajak);
            var bayar = document.getElementById("total");
            bayar.innerHTML = (subtotal * pajak) + subtotal;
        }
        else if ( value == "rumah"){
            abodemen = 30000;
            tarif = 500;
            pajak = 0.1;
            var row = document.getElementById("body");
            row.innerHTML = "";
            for (let i = 1; i <= hari; i++) {

                row.innerHTML += `
                <tr>
                   <td>${i}</td>
                   <td>${i * tarif}</td>
                   <td>${abodemen}</td>
                   <td>${abodemen + i * tarif}</td>
               </tr>
                `

                daftar_jumlah[x] = i;
                daftar_tarif[x] = tarif;
                daftar_abodemen[x] = abodemen;
                daftar_sub[x] = abodemen + daftar_tarif[x];

                subtotal = daftar_sub[x];
                
                x++;
            }
            var sub = document.getElementById("sub");
            sub.innerHTML = subtotal;
            var Pajak = document.getElementById("pajak");
            Pajak.innerHTML = (subtotal * pajak);
            var bayar = document.getElementById("total");
            bayar.innerHTML = (subtotal * pajak) + subtotal;
        }
        else if ( value == "apartemen"){
            abodemen = 50000;
            tarif = 750;
            pajak = 0.15;
            var row = document.getElementById("body");
            row.innerHTML = "";
            for (let i = 1; i <= hari; i++) {

                row.innerHTML += `
                <tr>
                   <td>${i}</td>
                   <td>${i * tarif}</td>
                   <td>${abodemen}</td>
                   <td>${abodemen + i * tarif}</td>
               </tr>
                `

                daftar_jumlah[x] = i;
                daftar_tarif[x] = tarif;
                daftar_abodemen[x] = abodemen;
                daftar_sub[x] = abodemen + daftar_tarif[x];

                subtotal = daftar_sub[x];
                
                x++;
            }
            var sub = document.getElementById("sub");
            sub.innerHTML = subtotal;
            var Pajak = document.getElementById("pajak");
            Pajak.innerHTML = (subtotal * pajak);
            var bayar = document.getElementById("total");
            bayar.innerHTML = (subtotal * pajak) + subtotal;
        }
        else if ( value == "industri"){
            abodemen = 75000;
            tarif = 1000;
            pajak = 0.2;
            var row = document.getElementById("body");
            row.innerHTML = "";
            for (let i = 1; i <= hari; i++) {

                row.innerHTML += `
                <tr>
                   <td>${i}</td>
                   <td>${i * tarif}</td>
                   <td>${abodemen}</td>
                   <td>${abodemen + i * tarif}</td>
               </tr>
                `

                daftar_jumlah[x] = i;
                daftar_tarif[x] = tarif;
                daftar_abodemen[x] = abodemen;
                daftar_sub[x] = abodemen + daftar_tarif[x];

                subtotal = daftar_sub[x];
                
                x++;
            }
            var sub = document.getElementById("sub");
            sub.innerHTML = subtotal;
            var Pajak = document.getElementById("pajak");
            Pajak.innerHTML = (subtotal * pajak);
            var bayar = document.getElementById("total");
            bayar.innerHTML = (subtotal * pajak) + subtotal;
        }
        else{
            abodemen = 100000;
            tarif = 1250;
            pajak = 0.25;
            var row = document.getElementById("body");
            row.innerHTML = "";
            for (let i = 1; i <= hari; i++) {

                row.innerHTML += `
                <tr>
                   <td>${i}</td>
                   <td>${i * tarif}</td>
                   <td>${abodemen}</td>
                   <td>${abodemen + i * tarif}</td>
               </tr>
                `

                daftar_jumlah[x] = i;
                daftar_tarif[x] = tarif;
                daftar_abodemen[x] = abodemen;
                daftar_sub[x] = abodemen + daftar_tarif[x];

                subtotal = daftar_sub[x];
                
                x++;
            }
            var sub = document.getElementById("sub");
            sub.innerHTML = subtotal;
            var Pajak = document.getElementById("pajak");
            Pajak.innerHTML = (subtotal * pajak);
            var bayar = document.getElementById("total");
            bayar.innerHTML = (subtotal * pajak) + subtotal;
        }  
        }
        else{
            alert("Jumlah hari tidak valid");
    } 
}   

