<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="first-name">First Name<sup>*</sup></label>
      <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Example First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="last-name">Last Name<sup>*</sup></label>
      <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Example Last Name">
    </div>
    <div class="form-group col-md-4">
      <label for="phone">Phone<sup>*</sup></label>
      <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="801-555-5555">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="email">Email<sup>*</sup></label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Example@youremail.com">
    </div>
    <div class="form-group col-md-4">
      <label for="company-name">Company/Fleet Name<sup>*</sup></label>
      <input type="text" class="form-control" id="company-name" name="company-name" placeholder="Company Name">
    </div>
    <div class="form-group col-md-4">
      <label for="company-name">Fleet Size</label>
      <input type="text" class="form-control" id="fleet-size" name="fleet-size" placeholder="20">
    </div>
  </div>
  <div class="form-row mt-0 mt-md-5">
    <div class="form-group col-md-12">
      <textarea class="form-control" placeholder="Anything else you'd like to share?" name="others"></textarea>
    </div>
  </div>
  <div class="text-center text-md-right">
    <button type="submit" class="btn btn-outline-dark text-right">Submit</button>
  </div>
</form>
