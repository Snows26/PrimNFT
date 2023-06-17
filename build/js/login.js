const config = {
    type: "carousel",
    perView: 1 ,
    autoplay: 8000,
    hoverpause: false,
    animationDuration: 3000,
    touchAngle: 0,
    gap: 0,
    focusAt: 'center'
    }
    
new Glide('.glide', config).mount();



// ALERT DE CADASTRO . . . . . . . 

function cadastroCompleto(){
    iziToast.success({
      position: 'bottomCenter',
      progressBarColor: 'black',
      zindex: '6',
      title: 'Cadastro completo!',
      message: 'Agora você pode logar com a sua conta na PRIM!',
  })
  }


  
  // ALERT DE CADASTRO . . . . . . . 

function loginNaoExiste(){
    iziToast.error({
      position: 'bottomCenter',
      progressBarColor: 'black',
      zindex: '6',
      title: 'Email ou senha errado!',
      message: 'Se registre antes de logar',
  })
  }

  // ALERT PREENCHER . . . . . . . 

  function loginPreencher(){
    iziToast.error({
      position: 'bottomCenter',
      progressBarColor: 'black',
      zindex: '6',
      title: 'Preencha os campos!',
      message: 'Coloque seu email e senha',
  })
  }