const btnToggle = document.querySelector('.toggle-btn');
btnToggle.addEventListener('click',function() {
    document.getElementById('sidebar').classList.toggle('active');
});

var checkbox = document.getElementById('sala');

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
        var sala = 1;   
        alert('El bombillo de la sala se encendio');    
    }else{
        alert('El bombillo de la sala se apagado')

    }
});


var checkbox = document.getElementById('cocina');
checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       alert('El bombillo de la cocina se encendio');
        fetch('bonton.php',{
            method: 'POST',

        })
    }else{
        alert('El bombillo de la cocina se apagado')
    }
});

var checkbox = document.getElementById('habitacion1');
checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       alert('El bombillo de la habitacion 1 se encendio');
        fetch('bonton.php',{
            method: 'POST',
        })
    }else{
        alert('El bombillo de la habitacion 1 se apagado')
    }
});

var checkbox = document.getElementById('habitacion2');
checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       alert('El bombillo de la habitacion 2 se encendio');
        fetch('bonton.php',{
            method: 'POST',

        })
    }else{
        alert('El bombillo de la habitacion 2 se apagado')
    }
});
