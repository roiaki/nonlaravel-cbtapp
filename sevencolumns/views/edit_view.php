<body>
  <?php include '../common/global_menu.php'; ?>

  <div class="container">

    <div class="col-5">
      <h3>3コラムid = <?php echo $_GET['threecol_id']; ?> 番 編集ページ</h3>

      <form method="post" action="action/update.php">

        <input type="hidden" name="threecol_id" value="<?php echo $threecolumn['id']; ?>">

        <div class="form-group">
          <label>出来事タイトル</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $threecolumn['title']; ?>">
        </div>
        <?php
        if ( isset($_SESSION['error_title']) ) {
            echo '<div class="text-danger">';
            foreach ($_SESSION['error_title'] as $error) {
                echo "<div>* $error </div>";
            }
            echo '</div>';
            unset($_SESSION['error_title']);
        }
        ?>

        <div class="form-group">
          <!-- 内容 -->
          <label for="content">①出来事 の 内容</label>
          <textarea class="form-control" id="content" name="content" cols="90" rows="7"><?php echo $threecolumn['content']; ?></textarea>
        </div>
        <?php
        if ( isset($_SESSION['error_content']) ) {
            echo '<div class="text-danger">';
            foreach ($_SESSION['error_content'] as $error) {
                echo "<div>* $error </div>";
            }
            echo '</div>';
            unset($_SESSION['error_content']);
        }
        ?>

        <div class="form-group">
          <label for="emotion_name">②-1  感情名</label>
          <input type="text" class="form-control" id="emotion_name" name="emotion_name" 
                 value="<?php echo $threecolumn['emotion_name']; ?>">

            <!-- 感情名必須バリデーション表示-->

        </div>

        <div class="form-group">
          <label for="emotion_strength">②-2  強さ</label>
          <input type="number" class="form-control" id="emotion_strength" name="emotion_strength"
                 value="<?php echo $threecolumn['emotion_strength']; ?>">

          <!-- 感情名必須バリデーション表示-->

        </div>

        <div class="form-group">
          <label for="thinking">③その時考えたこと（自動思考）</label><br>
          <textarea class="form-control" 
                    id="thinking" 
                    name="thinking" 
                    cols="90" 
                    rows="7"><?php echo $threecolumn['thinking']; ?></textarea>

          <!-- 感情名必須バリデーション表示-->

        </div>

        <lavel>当てはまる考え方の癖</lavel>
        <div class="form-group">					
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[0]" id="1" 
              <?php
                if ( isset($id) ) {
                    if ( in_array(1, $id) ) {
                        echo "checked";
                    }
                }  
              ?> 
            >
            <label class="form-check-label" for="1">
              一般化のし過ぎ
            </label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[1]" id="2"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(2, $id) ) {
                          echo "checked";
                      }
                  }
              ?> 
            >
            <label class="form-check-label" for="2">
              自分への関連付け
            </label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[2]" id="3"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(3, $id) ) {
                          echo "checked";
                    }
                  }  
              ?> 
            >
            <label class="form-check-label" for="3">
              根拠のない推論
            </label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[3]" id="4"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(4, $id) ) {
                        echo "checked";
                      }
                  }  
              ?> 
            >
            <label class="form-check-label" for="4">
              白か黒か思考
            </label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[4]" id="5"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(5, $id) ) {
                          echo "checked";
                      }
                  }  
              ?> 
            >
            <label class="form-check-label" for="5">
              すべき思考
            </label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[5]" id="6"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(6, $id) ) {
                         echo "checked";
                      }
                  }  
              ?> 
            >
            <label class="form-check-label" for="6">
              過大評価と過少評価
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="habit[6]" id="7"
              <?php
                  if ( isset($id) ) {
                      if ( in_array(7, $id) ) {
                          echo "checked";
                      }
                  }  
              ?> 
            >
            <label class="form-check-label" for="7">
              感情による決めつけ
            </label>
          </div>
        <button class="btn btn-primary" type="submit">3コラム更新</button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>