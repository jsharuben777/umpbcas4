<!DOCTYPE html>
<html>
    <head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="row">

         <div class="column">
          <div class="form-group">
            <label for="Day">Day</label>
            <input
              type="text"
              class="form-control"
              id="Day"
              name="Day"
            />
          </div>
          <div class="form-group">
            <label for="Month">Month</label>
            <input
              type="text"
              class="form-control"
              id="Month"
              name="Month"
            />
          </div>
           </div>
     
          <div class="column">
            <div class="form-group">
              <label for="Year">Year</label>
              <input
                type="text"
                class="form-control"
                id="Year"
                name="Year"
              />
            </div>
            <div class="form-group">
              <label for="Cyber_Attack_Details">Cyber_Attack_Details</label>
              <input
                type="password"
                class="form-control"
                id="Cyber_Attack_Details"
                name="Cyber_Attack_Details"
              />
            </div>
            <div class="form-group">
              <label for="Time">Time</label>
              <input
                type="password"
                class="form-control"
                id="Time"
                name="Time"
              />
            </div>
            <div class="form-group">
              <label for="Status">Status</label>
              <input
                type="password"
                class="form-control"
                id="Status"
                name="Status"
              />
            </div>
            <div class="form-group">
              <label for="Threat Level">Threat Level</label>
              <input
                type="password"
                class="form-control"
                id="Threat Level"
                name="Threat Level"
              />
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <input
                type="password"
                class="form-control"
                id="Description"
                name="Description"
              />
            </div>
            <br>
            <input type="submit" class="btn btn-primary" />
           </div>
     </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>












    </html>
