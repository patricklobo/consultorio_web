<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><b>Agendar consulta</b></h3>
    </div>

    <div class="panel-body" >
      <form method="post" action="">
        <input type="hidden" name="id" >
        <div class="form-group">
          <label>Paciente</label>
          <input type="text"  name="paciente" class="form-control" >
        </div>
        <div class="form-group">
          <label>Data/Hora</label>
          <input type="text"  name="data_hora" class="form-control" pattern="[09-09-09]{}" >
        </div>
        <div class="form-group">
          <label>Status</label>
          <input type="text" name="status" class="form-control" >
        </div>
        <div class="form-group">
          <label>Data</label>
          <input type="text" name="data" class="form-control" >
        </div>
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </form>
    </div>
  </div>
