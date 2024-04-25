<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Code chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Tomorrow' rel='stylesheet'> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.24/vue.cjs.js" integrity="sha512-8nzM0yEq0UxlayN3MGBCL7/7Z4/oQa/3htLVQYEIn43rHSqT2DTneF6jOdyuTCJdqMVhx40EnB6AhRgqViOZ0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.16.1/echo.min.js" integrity="sha512-8owut6N5yaaBeiV/noGkbrQi+eT+i2BaQGUOp+GTVwXHPKNZwMv5ZGEDC1omn+6+dls0DjWkcV7hYHB/EZHLsA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.5/socket.io.min.js" integrity="sha512-11t8Q+vY9JlCrr+PveZKTYJq8n7O09Y5X/pk/aMd3vJugSvu4xOunGEUzaADqL3I8cZKE/pBwwCfXzDkRJh2sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <main class="content">
      <div class="container p-0"> 
        <!-- <h1 class="h3 mb-3">Code chat</h1> -->
        <div class="card">
          <div class="row g-0">
            <div class="col-12 col-lg-5 col-xl-3 border-right">
              <div class="px-4 d-none d-md-block">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                    <input type="text" class="form-control my-3" placeholder="Search...">
                  </div>
                </div>
              </div>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="badge bg-success float-right">5</div>
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Vanessa Tucker <div class="small">
                      <span class="fas fa-circle chat-online"></span> Online
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="badge bg-success float-right">2</div>
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="William Harris" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> William Harris <div class="small">
                      <span class="fas fa-circle chat-online"></span> Online
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Sharon Lessman <div class="small">
                      <span class="fas fa-circle chat-online"></span> Online
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Christina Mason" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Christina Mason <div class="small">
                      <span class="fas fa-circle chat-offline"></span> Offline
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Fiona Green <div class="small">
                      <span class="fas fa-circle chat-offline"></span> Offline
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Doris Wilder <div class="small">
                      <span class="fas fa-circle chat-offline"></span> Offline
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Haley Kennedy <div class="small">
                      <span class="fas fa-circle chat-offline"></span> Offline
                    </div>
                  </div>
                </div>
              </a>
              <a href="#" class="list-group-item list-group-item-action border-0">
                <div class="d-flex align-items-start">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
                  <div class="flex-grow-1 ml-3"> Jennifer Chang <div class="small">
                      <span class="fas fa-circle chat-offline"></span> Offline
                    </div>
                  </div>
                </div>
              </a>
              <hr class="d-block d-lg-none mt-1 mb-0">
            </div>
            <div class="col-12 col-lg-7 col-xl-9">
              <div class="py-2 px-4 border-bottom d-none d-lg-block">
                <div class="d-flex align-items-center py-1">
                  <div class="position-relative">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                  </div>
                  <div class="flex-grow-1 pl-3">
                    <strong>Sharon Lessman</strong>
                    <div class="text-muted small">
                      <em>Typing...</em>
                    </div>
                  </div>
                  <div>
                    <button class="btn btn-primary btn-lg mr-1 px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                      </svg>
                    </button>
                    <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg">
                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                      </svg>
                    </button>
                    <button class="btn btn-light border btn-lg px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="position-relative">
                <div class="chat-messages p-4">
                  <div class="chat-message-right pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Cum ea graeci tractatos.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Cum ea graeci tractatos.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                    </div>
                  </div>
                  <div class="chat-message-right mb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                      <div class="font-weight-bold mb-1">You</div> Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                    </div>
                  </div>
                  <div class="chat-message-left pb-4">
                    <div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                      <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                    </div>
                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                      <div class="font-weight-bold mb-1">Sharon Lessman</div> Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-grow-0 py-3 px-4 border-top">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type your message">
                  <button class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script>
        new Vue({
            el: {"#app"
        })
    </script>
  </body>
</html>