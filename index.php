<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('view/head.php'); ?>
  </head>

  <body>
    <?php include('view/header.php'); ?>
    <div class="container">
      <div id="main-sidebar" class="sidebar">
        <div class="menu-item">Adicionados recentemente</div>
      </div>

      <div class="content">
        <div class="adicionar">
          <h1 class="adicionar-title">ADICIONAR CRÍTICA</h1>
          <div> </div>

          <div class="add-movie-btn">
            <ion-icon class="menu-item" name="add-circle"></ion-icon>
            <h1 class="menu-item">Filme</h1>
          </div>
          
          <div class="add-book-btn">
            <ion-icon class="menu-item" name="add-circle"></ion-icon>
            <h1 class="menu-item">Livro</h1>
          </div>

          <div class="add-serie-btn">
            <ion-icon class="menu-item" name="add-circle"></ion-icon>
            <h1 class="menu-item">Série</h1>
          </div>
        </div>

        <div class="pesquisa">
          <div class = "campo">
          <input type="text" placeholder="Pesquisar" />
          <button>
            <ion-icon name="search-sharp"></ion-icon>
          </button>
          </div>
        </div>
      </div>

      <div class="modal">
        <div class="modal-serie">
          <div class="close-icon">
            <ion-icon name="close-circle-outline" />
          </div>
          <label class="modal-serie-label"><strong>ADICIONAR CRÍTICA</strong></label>
          <input class="input-field input-task-name" type="text" placeholder="Título">
          <textarea class="input-field input-task-description" 
          rows="8" type="text" placeholder="Descrição"></textarea>
          </div>
        </div>
    </div>

    <footer class="main-footer">
      <div class="credits">
        &copy; Grupo x
      </div>
    </footer>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>