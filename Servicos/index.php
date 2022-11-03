<!DOCTYPE html>
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <link rel="icon" href="/Foto/paw-solid.svg">
    <link href="/styles/style.css" rel="stylesheet" type="text/css"/>
    <style>
        .card{
            margin: 10px 0;
        }
        .prodImg{
            width: 80%;
            background-color:#f5eadd!important;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }
        .btn{
            width: 75%;
        }
        .btnBuy{
            background-color: rgba(65,137,230,.15)!important;
            border-color: transparent!important;
            color: #3483fa!important;
        }
        .btn{
            width: 50%
        }

        .divReservar{
            justify-content: flex-end;
        }


        @media screen and (max-width: 900px) {
            .divReservar{
                justify-content: flex-start;
            }
        }


    </style>
    <header>
        <?php include_once('../topmenu2.php'); ?>
    </header>

</head>

<body>


    <br>
    <div class="container">

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h1 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Serviços Populares
                </button>
            </h1>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Banho e Tosa</h5>
                                    <p class="small" >Serviços Populares</p>
                                </div>
                                <!-- <div class="col-md-2" style="padding: 0.7rem;text-align: end;">

                                </div> -->
                                <div class="col-md-5"></div>
                                <div class="col-md-4 d-flex divReservar">
                                <h6 class="font-weight-bold" > R$ 12,90</h6>&nbsp;&nbsp;
                                    <button class="btn button justify-content-center">Reservar</button><br>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
        <!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <!-- Then put toasts within -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        Hello, world! This is a toast message.
        </div>
    </div>
</div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        Outros Serviços
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Nome do Servico</h5>
                                    <p class="small" >Serviços Populares</p>
                                </div>
                                <div class="col-md-5"></div>
                                <div class="col-md-4 d-flex divReservar">
                                <h6 class="font-weight-bold" > R$ 12,90</h6>&nbsp;&nbsp;
                                    <button class="btn button justify-content-center">Reservar</button><br>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
        </div>
    </div>
  </div>

        
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>



    </div>
    
        <?php include_once('../footer.php'); ?>
</body>

<script>
const toastLiveExample = $('.toast')
const toast = new bootstrap.Toast(toastLiveExample)

toast.show();
</script>

<script>
/* ScrollReveal: Mostrar elementos quando der scroll na página */
const scrollReveal = ScrollReveal({
  origin: "top",
  distance: "30px",
  duration: 1000,
  reset: true,
});

scrollReveal.reveal('.card',
  { interval: 100 }
);
</script>

</html>