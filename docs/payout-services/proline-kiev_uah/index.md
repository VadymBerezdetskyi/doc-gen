## General 
**Code:** `proline-kiev_uah`  
**Method:** `proline-kiev`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `0.01`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] User id  
: [uk] Ім'я користувача  
: [ru] Идентификатор пользователя  
Hint:  
: [en] Enter user id  
: [uk] Введіть ім'я користувача  
: [ru] Введите идентификатор пользователя  
## JSON Object 
```json
 {"code":"proline-kiev_uah","method":"proline-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"User id","uk":"\u0406\u043c'\u044f \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430","ru":"\u0418\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter user id","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0456\u043c'\u044f \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f"},"example":"00022092"}],"amount_min":0.01,"amount_max":14999}```  
