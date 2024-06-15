require('./bootstrap');

      // 画像リンクをクリックしたときにモーダルを表示
      const imageLinks = document.querySelectorAll('.image-link');
      const modal = document.querySelector('.modal');
      const modalContent = modal.querySelector('.modal-content');
      const closeModal = modal.querySelector('.close');

      imageLinks.forEach(function(link) {
          link.addEventListener('click', function(event) {
              event.preventDefault();
              modalContent.src = this.href;
              modal.style.display = 'block';
          });
      });

      // モーダルの閉じるボタンがクリックされたとき、モーダルを非表示にする
      closeModal.addEventListener('click', function() {
          modal.style.display = 'none';
      });
      // モーダルの背景がクリックされたとき、モーダルを非表示にする
      window.addEventListener('click', function(event) {
          if (event.target === modal) {
              modal.style.display = 'none';
          }
      });
  