<?php include "inc/header.php" ?> 


<div class="why-choose" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<body>
        <h1>Top Empresas</h1>
            <p>A seguir estão as Top 5 Empresas com a melhor equidade de gênero, raça e inclusão.</p>

            <div class="top"><ol>Top Empresas Brasil
                <li>Empresa X</li>
                <li>Empresa Y</li>
                <li>Empresa Z</li>
                <li>Empresa Tal</li>
                <li>Empresa Fulana</li>
            </ol></div>
                
            
            <div  class="top2">
            <ol><div style="font-size: x-large; text-align: left;">Top Empresas Global</div>
                <li>Empresa X</li>
                <li>Empresa Y</li>
                <li>Empresa Z</li>
                <li>Empresa Tal</li>
                <li>Empresa Fulana</li>
            </ol></div>
<br>
</div class="why-choose">




<div class="why-choose" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1>Resultados</h1>
            <!-- <p>Abaixo estão os resultados que ajudamos a alcançar para as empresas que utilizam nossa plataforma.</p> -->
<!-- 
            <div class="resultado">
                <h2>Nome Empresa XYZ</h2>
                <img src="" alt="Logo empresa">
                <p>Salário médio antes: R$3000</p>
                <p>Salário médio depois: R$4500</p>
                <p>Nível de Satisfação: 85%</p>
            </div>     USANDO O DO GUSTAVO --> 

            
                    <!-- codigo parte do gustavo -->
                    <div class="section" id="graficos" >
                        <!-- <h2>Resultados</h2>
                        <p>Abaixo estão os resultados que ajudamos a alcançar para as empresas que utilizam nossa plataforma:</p>
                        
                        
                        USANDO MEU TITULO-->
                        <div  style="background-color: #9966ff;"  class="company-info">
                            <h3>Nome da Empresa: XYZ Ltda</h3>
                            <img  src="https://tecnoblog.net/wp-content/uploads/2015/09/google-logo-gif.gif" alt="Logo da Empresa" style="width: 150px; height: auto; border-radius: 10px;">
                            <p>Salário Médio Antes: R$ 3000</p>
                            <p>Salário Médio Depois: R$ 4500</p>
                            <b><p style="font-size: 30px;">Nível de Satisfação: 85%</p></b>
                        </div>
                
                        <div class="chart-container">
                            <div class="chart">
                                <canvas id="salaryChart"></canvas> <!-- Área do gráfico de salários -->
                                <p style="text-align: center;">Salário Médio</p>
                            </div>
                            <div class="chart">
                                <canvas id="satisfactionChart"></canvas> <!-- Área do gráfico de satisfação -->
                                <p style="text-align: center;">Satisfação dos Funcionários</p>
                            </div>
                        </div>
                    </div> <br><br><br>
</div class="why-choose">
                <br><br><br><br><br>
                    <!-- <div class="section" id="feedback">
                        <h2>Feedback Anônimo</h2>
                        <p>Funcionários podem enviar feedbacks anônimos sobre a empresa e seus salários:</p>
                        <form class="feedback-form" id="feedbackForm">
                            <textarea rows="4" id="feedbackMessage" placeholder="Sua Mensagem (anônima)" required></textarea>
                            <button type="submit">Enviar Feedback</button>
                        </form>
                        <p id="feedbackResponse" style="color: green; display: none;"></p>
                    </div>
                 -->
                 <!-- <div class="why-choose" >
                 <h1>Contato</h1>
                 <p>Entre em contato conosco para mais informações:</p>

                    <div class="section" id="contato"> -->
                        <!-- <h2>Contato</h2>
                        <p>Entre em contato conosco para mais informações:</p> -->
                        <!-- <form class="contact-form" id="contactForm">
                            <input type="text" id="name" placeholder="Seu Nome" required>
                            <input type="email" id="email" placeholder="Seu Email" required>
                            <textarea rows="4" id="message" placeholder="Sua Mensagem" required></textarea>
                            <button type="submit">Enviar</button>
                        </form>
                        <p id="formResponse" style="color: green; display: none;"></p>
                    </div>
                </div>
</div class="why-choose"> -->


                <script>
                    // Gráfico de salários
                    
                    const ctxSalary = document.getElementById('salaryChart').getContext('2d'); // Seleciona o elemento do gráfico
                    const salaryChart = new Chart(ctxSalary, {
                        type: 'bar', // Tipo de gráfico (barras)
                        data: {
                            labels: ['Antes', 'Depois'], // Rótulos para o eixo X
                            datasets: [{
                                label: 'Salário Médio', // Nome da série de dados
                                data: [3000, 4500], // Dados do gráfico
                                backgroundColor: [ '#9966ff', '#FFA500'], // Cores das barras
                                borderWidth: 1 // Largura da borda
                            }]
                        },
                        options: {
                            responsive: true, // Gráfico responsivo
                            maintainAspectRatio: false, // Mantém a proporção
                            scales: {
                                y: {
                                    beginAtZero: true, // Começa o eixo Y do zero
                                    ticks: {
                                        callback: function(value) {
                                            return 'R$ ' + value; // Formata os valores no eixo Y
                                        }
                                    }
                                }
                            }
                        }
                    });
                
                    // Gráfico de satisfação
                    const ctxSatisfaction = document.getElementById('satisfactionChart').getContext('2d'); // Seleciona o elemento do gráfico
                    const satisfactionChart = new Chart(ctxSatisfaction, {
                        type: 'doughnut', // Tipo de gráfico (pizza)
                        data: {
                            labels: ['Satisfeitos', 'Insatisfeitos'], // Rótulos para o gráfico
                            datasets: [{
                                label: 'Satisfação dos Funcionários', // Nome da série de dados
                                data: [85, 15], // Dados do gráfico
                                backgroundColor: ['#9966ff','#FFA500' ], // Cores das fatias
                                borderWidth: 1 // Largura da borda
                            }]
                        },
                        options: {
                            responsive: true, // Gráfico responsivo
                            maintainAspectRatio: false, // Mantém a proporção
                            plugins: {
                                legend: {
                                    display: true, // Exibe a legenda
                                }
                            }
                        }
                    });
                </script>









</body>


<?php include 'inc/footer.php'; ?>