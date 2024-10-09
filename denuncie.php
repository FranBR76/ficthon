<?php include "inc/header.php" ?> 


<body>

    <div class="section" id="contato">
    <form class="contact-form" id="contactForm" action="envioform.php">

    <div class="why-choose" style="color: black; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
       
       <div style="font-size: xxx-large; color:black;" class="why-choose"><label style="font-size: xx-large;" for="h2Den"><b>Insira seus dados <br></div class="why-choose"><br>
       
       
           <input type="text" id="name" placeholder="Seu Nome" required>
                              <br> <input type="email" id="email" placeholder="Seu Email" required> 
   
                              <br><br>
    <br><br>
   <label style="font-size: xx-large;" for="h3Den"><b>Qual o tipo de violação ocorreu?</b></label><br><br>
           
           <input type="radio" name="dados" id="dados">
            <label style="font-size: x-large;" for="dados">Disparidade Salarial</label>
            <br>
            <input type="radio" name="dados" id="dados2">
            <label style="font-size: x-large;" for="dados2">Violência</label>
            <br>
            <input type="radio" name="dados" id="dados3">
            <label style="font-size: x-large;" for="dados3">Outro</label>
            <br>
            
            <br>
   <label style="font-size: xx-large;" for="h3Den"><b>Qual seu Gênero</b></label><br><br>
           
           <input type="radio" name="dados" id="dados">
            <label style="font-size: x-large;" for="dados">Masculino</label>
            <br>
            <input type="radio" name="dados" id="dados2">
            <label style="font-size: x-large;" for="dados2">Feminino</label>
            <br>
            <input type="radio" name="dados" id="dados3">
            <label style="font-size: x-large;" for="dados3">Outro</label>
            <br>
            <input type="radio" name="dados" id="dados4">
            <label style="font-size: x-large;" for="dados4">Prefiro não comentar</label>

            
       
            <br><br>
            <label style="font-size: xx-large;" for="h3Den"><b>Raça/Cor</b></label><br><br>
            <input type="radio" name="cor" id="cor3" > <label style="font-size: x-large;" for="cor3">Amarelo</label><br>
            <input type="radio" name="cor" id="cor1" > <label style="font-size: x-large;" for="cor1">Branco</label><br>
           <input type="radio" name="cor" id="cor3" > <label style="font-size: x-large;" for="cor3">Indígena</label><br>
            <input type="radio" name="cor" id="cor3" > <label style="font-size: x-large;" for="cor3">Pardo</label><br>
            <input type="radio" name="cor" id="cor2" > <label style="font-size: x-large;" for="cor2">Preto</label><br>
            
            
            
            
            
            <br><br><br><input style="size: x-large;" title="Pessoa com Deficiência" type="checkbox" name="dados" id="PCD">
           
            <label style="font-size: xx-large;" title="Pessoa com Deficiência" for="PCD">PCD</label>
   
            </div class="why-choose">

            <div class="why-choose" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">  
        <label style="font-size: xx-large; color: black; " for="h1Den"><b>Nos conte o que acontece ou já aconteceu na sua empresa.</b></label><br><br>
    
        <textarea id="h1Den"  rows="5" cols="75" maxlength="2048" placeholder="Escreva Aqui" required ></textarea>
</div class="why-choose">

   

<br><br>

<div class="why-choose" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<label style="font-size: xx-large; color: black;"  for="empresa"><b>Qual o nome da empresa em questão?</b></label>
        
        <br><input style="font-size: x-large;" placeholder="Nome da empresa aqui" type="text" id="empresa" required>
        </div>
</div class="why-choose">
<br>


<input style="color: azure; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" class="botao" type="submit" value="Enviar resposta">

    </form>
</body>

<?php include 'inc/footer.php'; ?>