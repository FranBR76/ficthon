<?php include "inc/header.php" ?> 

<div class="why-choose" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<body>
    <h1>Contato</h1>
    <p>Entre em contato conosco para mais informações:</p>

       <div class="section" id="contato">
           <!-- <h2>Contato</h2>
           <p>Entre em contato conosco para mais informações:</p> -->
           <form class="contact-form" id="contactForm">
               <input type="text" id="name" placeholder="Seu Nome" required>
               <input type="email" id="email" placeholder="Seu Email" required>
               <textarea rows="4" id="message" placeholder="Sua Mensagem" required></textarea>
               <button type="submit">Enviar</button>
           </form>
           <p id="formResponse" style="color: green; display: none;"></p>
       </div>
   </div>
</body>
</div class="why-choose">


<?php include 'inc/footer.php'; ?>