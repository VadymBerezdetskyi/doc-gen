## General 
**Code:** `trk-kraevid-nikolaev-tsoa-podkliuchenie-k-ktb_uah`  
**Method:** `trk-kraevid-nikolaev-tsoa-podkliuchenie-k-ktb`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] PIB (all the same) # Addresses of the connection  
: [uk] ПІБ (Повністю) # Адреси Підключення  
: [ru] ФИО (полностью) # Адрес подключения  
Hint:  
: [en] PIB (all the same) # Addresses of the connection  
: [uk] ПІБ (Повністю) # Адреси Підключення  
: [ru] ФИО (полностью) # Адрес подключения  
## JSON Object 
```json
 {"code":"trk-kraevid-nikolaev-tsoa-podkliuchenie-k-ktb_uah","method":"trk-kraevid-nikolaev-tsoa-podkliuchenie-k-ktb","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PIB (all the same) # Addresses of the connection","uk":"\u041f\u0406\u0411 (\u041f\u043e\u0432\u043d\u0456\u0441\u0442\u044e) # \u0410\u0434\u0440\u0435\u0441\u0438 \u041f\u0456\u0434\u043a\u043b\u044e\u0447\u0435\u043d\u043d\u044f","ru":"\u0424\u0418\u041e (\u043f\u043e\u043b\u043d\u043e\u0441\u0442\u044c\u044e) # \u0410\u0434\u0440\u0435\u0441 \u043f\u043e\u0434\u043a\u043b\u044e\u0447\u0435\u043d\u0438\u044f"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"PIB (all the same) # Addresses of the connection","uk":"\u041f\u0406\u0411 (\u041f\u043e\u0432\u043d\u0456\u0441\u0442\u044e) # \u0410\u0434\u0440\u0435\u0441\u0438 \u041f\u0456\u0434\u043a\u043b\u044e\u0447\u0435\u043d\u043d\u044f","ru":"\u0424\u0418\u041e (\u043f\u043e\u043b\u043d\u043e\u0441\u0442\u044c\u044e) # \u0410\u0434\u0440\u0435\u0441 \u043f\u043e\u0434\u043a\u043b\u044e\u0447\u0435\u043d\u0438\u044f"},"example":"I\u0432\u0430\u043d\u043e\u0432\u0430 \u0410. I.#\u0432\u0443\u043b. \u0420\u0430\u0434\u0456\u0441\u043d\u0430, \u0431\u0443\u0434. 1, \u043a\u0432. 10"}],"amount_min":2,"amount_max":14999}```  
