filterSelection(null);
function filterSelection(key) {
    
    $.getJSON('myJSON.json', function (data) {
      let posts = data.menu;
      
      if (key == null){
        document.getElementById('sub').innerText = 'All';
      }
      else {
        document.getElementById('sub').innerText = key;
      }
  
      if (key) {
        posts = posts.filter(function (value) {
          return value.jenis === key;
        });
      }
  
      $('#card')
        .empty()
        .append(
          posts.map(function (each) {
            return `<div class="col-md-4 d-flex justify-content-evenly">
                        <div class="card d-flex justify-content-evenly" style="width: 18rem;">
                        <img src="${each.gambar}" class="card-img-top" alt="${each.jenis}">
                        <div class="card-body">
                            <h5 class="card-title">${each.nama}</h5>
                            <p class="card-text">${each.desc}</p>
                            <p class="card-text">${each.est}</p>
                            <p class="card-text">${each.harga}</p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                        </div>
                    </div>`;
          })
        );
    });
}