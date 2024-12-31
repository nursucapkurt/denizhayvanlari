<h2 style="text-align: center; color: #333;">Deniz Hayvanları</h2>


<div style="text-align: right; margin-bottom: 20px;">
    <a href="/dashboard" style="background-color: #2196F3; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; margin-right: 10px;">
        Dashboard
    </a>

    <form action="/logout" method="post" style="display: inline;">
        <button type="submit" style="background-color: #f44336; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; border: none; cursor: pointer;">
            Çıkış Yap
        </button>
    </form>
</div>

<div style="text-align: center; margin-bottom: 20px;">
    <a href="/admin/create" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">Yeni Hayvan Ekle</a>
</div>

<ul style="list-style-type: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
    <?php foreach ($animals as $animal): ?>
        <li style="background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h3 style="color: #4CAF50; font-size: 20px; margin-bottom: 10px;"><?= $animal['name'] ?></h3>
            <p style="color: #555; font-size: 14px; line-height: 1.6;"><?= $animal['description'] ?></p>
            
            <div style="margin-top: 15px; text-align: center;">
                <a href="/admin/edit/<?= $animal['_id'] ?>" style="background-color: #FFA500; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; margin-right: 10px; font-size: 14px;">Güncelle</a>
                <a href="/admin/delete/<?= $animal['_id'] ?>" style="background-color: #FF6347; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; font-size: 14px;" onclick="return confirm('Emin misiniz? Hayvan silinecek!');">Sil</a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
