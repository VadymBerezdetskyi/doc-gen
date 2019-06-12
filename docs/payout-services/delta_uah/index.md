## General 
**Code:** `delta_uah`  
**Method:** `delta`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] Authorization code  
: [uk] Код авторизації  
: [ru] Код авторизации  
Hint:  
: [en] Enter authorization code  
: [uk] Введіть код авторизації  
: [ru] Введите код авторизации  
## JSON Object 
```json
 {"code":"delta_uah","method":"delta","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Authorization code","uk":"\u041a\u043e\u0434 \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0456\u0457","ru":"\u041a\u043e\u0434 \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter authorization code","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043a\u043e\u0434 \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0456\u0457","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043a\u043e\u0434 \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438"},"example":"3847692027"}],"amount_min":2,"amount_max":14999}```  
