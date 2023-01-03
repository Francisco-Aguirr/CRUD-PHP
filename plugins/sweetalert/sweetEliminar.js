function advertencia(e){
    e.preventDefault();
    var url= $('this');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        footer: 'puedes volver a crear este Coder después'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          location.href = url.attr('href');
        }
      }).then((result)=>{
        if(result.isConfirmed){
            window.location.href=url;
        }
      })
}