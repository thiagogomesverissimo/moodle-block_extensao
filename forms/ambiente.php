<!-- Esse form deve ser substituído pela API de formulários do Moodle -->
<form method="POST">
  <!-- Nome Completo do Curso -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome Completo do Curso</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_completo_form" value="<?= $curso['nomcurceu'] ?>">
    </div>
  </div>

  <!-- Nome Breve do Curso -->
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nome Breve do Curso</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_breve_form" value="<?= $oferecimento . '-' .  $curso['nomcurceu']?>">
    </div>
  </div>

  <!-- Ambiente Aberto para Visitantes (e Google) ? -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Ambiente Aberto para Visitantes (e Google)?</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="visible_form" value="1" checked>
          <label class="form-check-label">
            Sim
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="visible_form" value="0">
          <label class="form-check-label">
            Não
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <input type="hidden" name="oferecimento_form" value="<?= $oferecimento ?>">

  <!-- Botão de Submit -->
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Criar Ambiente</button>
    </div>
  </div>

</form>
