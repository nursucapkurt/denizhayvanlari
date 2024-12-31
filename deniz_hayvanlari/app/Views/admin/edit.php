<h2>Hayvan Güncelle</h2>
<form method="post" action="/admin/update/<?= $animal['_id'] ?>" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #f9f9f9;">
    <div style="margin-bottom: 20px;">
        <label for="name" style="font-weight: bold; display: block; margin-bottom: 5px;">İsim:</label>
        <input type="text" name="name" value="<?= $animal['name'] ?>" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    
    <div style="margin-bottom: 20px;">
        <label for="description" style="font-weight: bold; display: block; margin-bottom: 5px;">Açıklama:</label>
        <textarea name="description" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;"><?= $animal['description'] ?></textarea>
    </div>
    
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Güncelle</button>
</form>
