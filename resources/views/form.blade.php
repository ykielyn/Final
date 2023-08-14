<!DOCTYPE html>
<html>
<head>
<style>
    body {
       
        background-color: white;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    
    form {
        background-color: #EADBC8;
        padding: 20px;
        border: 1px solid black;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-label {
        color: black;
    }
    
    .form-control {
        background-color: white;
        border: 1px solid black;
        color: black;
        width:80%;
        padding:10px;
        margin-bottom: 10px;
        border: 1px solid black;
        border-radius: 5px;
    
    }
    
    .btn-primary {
        background-color: black;
        color: white;
        border: none;
    }
    .btn-primary{
        background-color: black;
        color: white;
        border: none;
        padding: 7px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        margin-right: 10px;
        margin-top:9px;
        text-decoration: none;
        
    }
</style>
</head>
<body>

    <form>
    <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="Describe Yourself" class="form-label">Describe Yourself</label>
            <input type="Describe Yourself" id="Describe Yourself" name="Describe Yourself" class="form-control"required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" id="image" name="image" accept="image/*" class="form-control">
        </div>
        <div class="button-container">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="index.php" class="btn btn-primary">Back to Main Page</a>

        </div>

      
    </form>
  
    
</body>
</html>
