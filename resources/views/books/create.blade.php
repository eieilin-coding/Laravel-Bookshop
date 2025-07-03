@extends("layouts.app")
 @section("content" )
 
 <form action="_admins/bookCreate.php" method="POST" enctype="multipart/form-data">
@csrf 
     <div class="row g-3 mb-3">
         <div class="col-md-6">
             <label for="category_id" class="form-label fw-semibold">Category</label>
             <select name="category_id" id="category_id" class="form-select form-control">
                 <option value="">-- Select Category --</option>
                 <?php foreach ($categories as $category): ?>
                 <option value="<?php echo htmlspecialchars($category->id); ?>">
                     <?php echo htmlspecialchars($category->name); ?>
                 </option>
                 <?php endforeach; ?>
             </select>
         </div>

         <div class="col-md-6">
             <label for="author_id" class="form-label fw-semibold">Author</label>
             <select name="author_id" id="author_id" class="form-select form-control">
                 <option value="">-- Select Author --</option>
                 <?php foreach ($authors as $author): ?>
                 <option value="<?php echo htmlspecialchars($author->id); ?>">
                     <?php echo htmlspecialchars($author->name); ?>
                 </option>
                 <?php endforeach; ?>
             </select>
         </div>
     </div>

     <div class="row g-3 mb-3">
         <div class="col-md-6">
             <label for="title" class="form-label fw-semibold">Book Title</label>
             <input type="text" name="title" id="title" class="form-control" placeholder="Enter book title">
         </div>

         <div class="col-md-6">
             <label for="publisher" class="form-label fw-semibold">Publisher</label>
             <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Enter publisher">
         </div>
     </div>

     <div class="row g-3 mb-3">
         <div class="col-md-6">
             <label for="published_date" class="form-label fw-semibold">Published Date</label>
             <input type="date" name="published_date" id="published_date" class="form-control">
         </div>

         <div class="col-md-6">
             <label for="book_photo" class="form-label fw-semibold">Book Cover (Photo)</label>
             <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
             <small class="text-muted">Max: 5MB (JPG, PNG, GIF)</small>
         </div>
     </div>

     <div class="mb-3">
         <label for="description" class="form-label fw-semibold">Description</label>
         <textarea name="description" id="description" class="form-control" rows="3" placeholder="Short book description"></textarea>
     </div>

     <div class="mb-4">
         <label for="book_pdf" class="form-label fw-semibold">Upload Book PDF</label>
         <input type="file" id="pdf" name="pdf" class="form-control" accept="application/pdf">
         <small class="text-muted">Max: 20MB (PDF only)</small>
     </div>

     <div class="d-flex justify-content-center gap-3">
         <button type="submit" class="btn btn-primary px-4" name="upload">Add Book</button>
         <button type="button" class="btn btn-secondary px-4" onclick="window.history.back()">Cancel</button>
     </div>

 </form>

 @endsection
