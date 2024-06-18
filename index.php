<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Welcome Russia</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header>
            <div class="boas-vindas">
            <h1>RUSSIA - SEJA BEM VINDO</h1>
            <p>COHEÇA UM POUCO MAIS SOBRE A RÚSSIA: CURIOSIDADES, COMIDAS E MAIS!!!</p>
        </div>
        <div class="caixa">    
          <nav>
              <ul> 
                  <li><a href="index.html">HOME</a></li>
                  <li><a href="menu.html">COMIDA</a></li>
                  <li><a href="bebidas.html">BEBIDA</a></li>
                  <li><a href="curiosidades.html">CURIOSIDADES</a></li>
                  <li><a href="sobre.html">SOBRE</a></li>
              </ul>
          <nav>          
        
        </header>
        <section class="articles">
          <article>
            <div class="article-wrapper">
              <figure>
                <img src="img/fundo1.jpg" alt="" />
              </figure>
              <div class="article-body">
                <h2>MOSCOW</h2>
                <p>
                  Moscou, situada às margens do rio de mesmo nome, no oeste da Rússia, é a capital cosmopolita do país. Em seu núcleo histórico está localizado o Kremlin, um complexo que abriga a residência do presidente e tesouros czaristas no Palácio do Arsenal. 
                </p>
                <a href="moscow.html" class="read-more">
                  LEIA-MAIS <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <article>
        
            <div class="article-wrapper">
              <figure>
                <img src="img/fundo2.jpg" alt="" />
              </figure>
              <div class="article-body">
                <h2>SÃO PETERSBURGO</h2>
                <p>
                  São Petersburgo é uma cidade portuária russa situada às margens do Mar Báltico. Ela foi capital imperial por 2 séculos, tendo sido fundada em 1703 por Pedro, o Grande, objeto da emblemática estátua do "Cavaleiro de Bronze" da cidade.
                </p>
                <a href="#" class="read-more">
                  LEIA-MAIS <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <article>
        
            <div class="article-wrapper">
              <figure>
                <img src="img/fundo3.PNG" alt="" />
              </figure>
              <div class="article-body">
                <h2>NOVOSIBIRSK</h2>
                <p>
                  Novosibirsk é a capital da província homônima, na Sibéria, Rússia. Localiza-se às margens do rio Ob. Com 1 547 910 habitantes, é o maior centro urbano da Sibéria e a terceira maior cidade da Federação Russa, após Moscou e São Petersburgo
                </p>
                <a href="#" class="read-more">
                  LEIA-MAIS <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </article>
        </section>
        <div id="assistant-container" onclick="toggleChatBox()">
          <i class="fas fa-comments"></i>
          <div id="help-message"></div>
        </div>
        <div id="chat-box">
          <div id="chat-content"></div>
          <input type="text" id="user-input" placeholder="Digite sua pergunta...">
        </div>
        </div>
        <footer class="bg-body-tertiary text-center">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a
              data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>
        
              <!-- Twitter -->
              <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>
        
              <!-- Google -->
              <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <!-- Instagram -->
              <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <!-- Github -->
              <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #333333;"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
              ></a>
            </section>
            <!-- Section: Social media -->
          </div>
        </footer>

        <script>document.addEventListener("DOMContentLoaded", function () {
          const chatContent = document.getElementById("chat-content");
          const userInput = document.getElementById("user-input");
          const chatBox = document.getElementById('chat-box');
          const formContainer = document.getElementById("user-question-form");
          const showFormButton = document.getElementById("show-form-button");
      
          let conversaEncerrada = false;
      
          document.getElementById('assistant-container').addEventListener('click', toggleChatBox);
      
          userInput.addEventListener("keydown", handleUserInput);
      
          showFormButton.addEventListener("click", toggleFormContainer);
      
          document.addEventListener("click", closeUserItems);
      
          // Lista fictícia de perguntas e respostas
          const faq = [
              { pergunta: "Como faço para me matricular em uma das disciplinas?", resposta: "Você pode se matricular online no portal do aluno." },
              { pergunta: "Quais são os documentos necessários para a matrícula?", resposta: "CPF ou documento contendo o número do CPF; foto 3X4 de rosto recente, fundo neutro; documento de quitação com o serviço militar para brasileiros maiores de 18 anos do sexo masculino; histórico escolar completo do Ensino Médio (frente e verso);" },
              { pergunta: "Qual é a grade curricular do curso de Ciências da Computação?", resposta: "A grade curricular pode ser encontrada no site oficial da instituição." },
              { pergunta: "Existem atividades extracurriculares disponíveis?", resposta: "Sim, oferecemos uma variedade de atividades extracurriculares, incluindo clubes e eventos." },
              { pergunta: "Olá, como você está?", resposta: "Oi! Estou bem, obrigado. E você?" },
              { pergunta: "Tudo bem por aí?", resposta: "Sim, tudo tranquilo. E contigo?" },
              { pergunta: "Como foi o seu dia?", resposta: "Foi produtivo, obrigado por perguntar. E o seu?" },
              { pergunta: "O que você tem feito ultimamente?", resposta: "Tenho trabalhado bastante. E você?" },
              { pergunta: "Alguma novidade?", resposta: "Nada de muito novo. E por aí?" },
              { pergunta: "Qual é o seu filme favorito?", resposta: "Gosto muito de [Nome do Filme]. E você, tem um favorito?" },
              { pergunta: "Que tipo de música você curte?", resposta: "Sou fã de [Gênero Musical]. E você?" },
              { pergunta: "O que você faz nas horas vagas?", resposta: "Costumo ler e assistir séries. E você?" },
              { pergunta: "Já viajou para algum lugar especial?", resposta: "Sim, já fui para [Destino]. E você?" },
              { pergunta: "Tem algum hobby interessante?", resposta: "Gosto de [Hobby]. E você?" },
              { pergunta: "Como você lida com o estresse?", resposta: "Costumo fazer exercícios para relaxar. E você?" },
              { pergunta: "Qual é a sua comida favorita?", resposta: "Adoro [Comida Favorita]. E você?" },
              { pergunta: "Você pratica algum esporte?", resposta: "Faço [Esporte]. E você?" },
              { pergunta: "Qual é o seu livro preferido?", resposta: "Um dos meus favoritos é [Nome do Livro]. E você?" },
              { pergunta: "Como você aprendeu [habilidade]?", resposta: "Aprendi [Habilidade] através de cursos online. E você?" },
              { pergunta: "Tem algum projeto interessante em andamento?", resposta: "Estou trabalhando em [Projeto]. E você?" },
              { pergunta: "Qual é o seu animal de estimação?", resposta: "Tenho um [Tipo de Animal]. E você?" },
              { pergunta: "Como você se motiva no trabalho?", resposta: "Costumo definir metas e recompensar-me ao alcançá-las. E você?" },
              { pergunta: "O que você acha de [Tópico Atual]?", resposta: "Acho [Opinião sobre o Tópico]. E você?" },
              { pergunta: "Gosta de assistir esportes?", resposta: "Sim, assisto [Nome do Esporte]. E você?" },
              { pergunta: "Qual é o seu sonho de viagem?", resposta: "Meu sonho é visitar [Destino dos Sonhos]. E você?" },
              { pergunta: "Você acredita em [Tópico Específico]?", resposta: "Sim/Não, porque [Razão]. E você?" },
              { pergunta: "Já teve alguma experiência interessante recentemente?", resposta: "Sim, tive uma experiência incrível em [Descrição]. E você?" },
              { pergunta: "Gosta de café ou chá?", resposta: "Prefiro [Café/Chá]. E você?" },
              { pergunta: "Como você lida com o tempo livre?", resposta: "Costumo fazer [Atividade] nas horas vagas. E você?" },
              { pergunta: "O que você acha de tecnologia?", resposta: "Acho fascinante! E você?" },
              { pergunta: "Já teve algum momento engraçado ultimamente?", resposta: "Sim, aconteceu [Descrição Engraçada]. E você?" },
              { pergunta: "Como você mantém o equilíbrio entre trabalho e vida pessoal?", resposta: "Faço [Atividade] para relaxar. E você?" },
              { pergunta: "Tem algum super-herói favorito?", resposta: "Gosto muito do [Nome do Super-herói]. E você?" },
              { pergunta: "Qual é o seu aplicativo favorito?", resposta: "Uso bastante o [Nome do Aplicativo]. E você?" },
              { pergunta: "Você gosta de cozinhar?", resposta: "Sim, adoro cozinhar [Tipo de Culinária]. E você?" },
              { pergunta: "Como você define sucesso?", resposta: "Para mim, sucesso é [Sua Definição]. E você?" },
              { pergunta: "Qual é o seu maior medo?", resposta: "Tenho receio de [Maior Medo]. E você?" },
              { pergunta: "Como você se imagina daqui a 5 anos?", resposta: "Gostaria de [Meta para o Futuro]. E você?" },
              { pergunta: "O que te faz sorrir?", resposta: "Pequenos gestos e momentos felizes. E você?" },
              { pergunta: "Você pratica alguma atividade artística?", resposta: "Sim, gosto de [Atividade Artística]. E você?" },
              { pergunta: "Qual é o seu lugar favorito na sua cidade?", resposta: "Gosto de [Local Favorito]. E você?" },
              { pergunta: "Como você escolheu sua profissão?", resposta: "Escolhi [Profissão] porque [Razão]. E você?" },
              { pergunta: "Já teve alguma experiência marcante em viagens?", resposta: "Sim, quando estive em [Destino]. E você?" },
              { pergunta: "Como você se mantém motivado(a) diariamente?", resposta: "Foco em [Fonte de Motivação]. E você?" },
              { pergunta: "Já participou de algum evento especial recentemente?", resposta: "Sim, estive no [Nome do Evento]. E você?" },
              { pergunta: "Qual é a sua estação do ano preferida?", resposta: "Adoro a [Estação do Ano]. E você?" },
              { pergunta: "O que você faz para se manter saudável?", resposta: "Pratico [Hábito Saudável]. E você?" },
              { pergunta: "Qual é o seu programa de TV atual favorito?", resposta: "Estou assistindo [Nome do Programa]. E você?" },
              { pergunta: "Você gosta de jardinagem?", resposta: "Sim, tenho um pequeno jardim em casa. E você?" },
              { pergunta: "O que te inspira na vida?", resposta: "A busca por [Fonte de Inspiração]. E você?" },
              { pergunta: "Você tem alguma tradição familiar especial?", resposta: "Sim, temos a tradição de [Descrição da Tradição]. E você?" },
              { pergunta: "Já teve alguma conquista recente que gostaria de compartilhar?", resposta: "Sim, recentemente alcancei [Conquista]. E você?" },
              { pergunta: "Oiii", resposta: "Oi tudo bem?" },
              // Adicione mais perguntas e respostas conforme necessário
      ];
      
          function toggleChatBox() {
              chatBox.style.display = (chatBox.style.display === 'none' || chatBox.style.display === '') ? 'block' : 'none';
          }
      
          function handleUserInput(e) {
              if (e.key === "Enter") {
                  const userQuestion = userInput.value;
                  appendMessage("Você: " + userQuestion, "user");
      
                  if (conversaEncerrada) {
                      appendMessage("Assistente: Posso ajudar com mais alguma coisa?", "assistant");
                      conversaEncerrada = false;
                  } else {
                      answerQuestion(userQuestion);
                  }
      
                  userInput.value = "";
              }
          }
      
          function toggleFormContainer() {
              if (formContainer.style.display === "none" || formContainer.style.display === "") {
                  formContainer.style.display = "block";
                  showFormButton.textContent = "Esconder Formulário";
              } else {
                  formContainer.style.display = "none";
                  showFormButton.textContent = "Exibir Formulário";
              }
          }
      
          function toggleUserItems() {
              var userItems = document.getElementById("userItems");
              userItems.classList.toggle("show");
          }
          
          // Adicione este trecho ao seu código existente para lidar com o clique na imagem
          document.getElementById("adminImage").addEventListener("click", function() {
              toggleUserItems();
          });
          
      
          function appendMessage(message, sender) {
              const messageElement = document.createElement("div");
              messageElement.className = "message " + sender;
              messageElement.innerText = message;
              chatContent.appendChild(messageElement);
              chatContent.scrollTop = chatContent.scrollHeight;
          }
      
          function answerQuestion(question) {
              const answer = getAnswer(question);
              appendMessage("Assistente: " + answer, "assistant");
      
              setTimeout(function () {
                  appendMessage("Assistente: Você tem mais alguma dúvida?", "assistant");
                  conversaEncerrada = true;
              }, 1000);
          }
      
          function getAnswer(question) {
              if (question.toLowerCase().includes("como posso")) {
                  return "Para interagir comigo, você pode fazer perguntas como 'Como posso fazer algo?'.";
              }
      
              const foundAnswer = findPartialMatch(question, faq);
      
              return foundAnswer ? foundAnswer.resposta : "Desculpe, não tenho uma resposta para isso.";
          }
      
          function findPartialMatch(userQuestion, faq) {
              return faq.find(entry => entry.pergunta.toLowerCase().includes(userQuestion.toLowerCase()));
          }
      
          function closeUserItems(event) {
              const adminImage = document.getElementById("adminImage");
              const userItems = document.getElementById("userItems");
      
              if (event.target !== adminImage && event.target.parentNode !== adminImage) {
                  userItems.classList.remove("show");
              }
          }
      
                 // Adicione um script JavaScript para mostrar/ocultar a lista ao clicar na imagem
          const adminImage = document.getElementById('adminImage');
          const infoList = document.querySelector('.user-items');
      
          adminImage.addEventListener('click', function() {
              // Alternar a visibilidade da lista
              infoList.style.display = infoList.style.display === 'none' ? 'block' : 'none';
          });
             
      
      
             function buscar() {
              // Obtém a consulta de pesquisa do input
              var query = document.getElementById('searchInput').value;
          
              // Realiza uma requisição AJAX para buscar.php
              var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function () {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                      // Parseia a resposta JSON
                      var resultados = JSON.parse(xhr.responseText);
          
                      // Atualiza a div de resultados
                      exibirResultados(resultados);
                  }
              };
          
              // Configura a requisição AJAX
              xhr.open('GET', '/buscar.php?q=' + encodeURIComponent(query), true);
              xhr.send();
          }
          
          function exibirResultados(resultados) {
              // Obtém a div de resultados
              var resultadoDiv = document.getElementById('resultadoPesquisa');
          
              // Limpa a div de resultados
              resultadoDiv.innerHTML = '';
          
              // Itera sobre os resultados e os adiciona à div
              resultados.forEach(function (resultado) {
                  if (resultado.pergunta) {
                      resultadoDiv.innerHTML += 'Pergunta: ' + resultado.pergunta + '<br>';
                      // Adicione outras informações relevantes que você deseja exibir
                  } else if (resultado.mensagem) {
                      resultadoDiv.innerHTML += resultado.mensagem + '<br>';
                  }
              });
          }
      
      });</script>
    </body>
</html>