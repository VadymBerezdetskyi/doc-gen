## General 
**Code:** `undernet_uah`  
**Method:** `undernet`  
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
: [en] Specify payment code  
: [uk] Платіжний код  
: [ru] Платежный код  
Hint:  
: [en] Specify payment code  
: [uk] Вкажіть платіжний код  
: [ru] Укажите платежный код  
## JSON Object 
```json
 {"code":"undernet_uah","method":"undernet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Specify payment code","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u041f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 \u043a\u043e\u0434"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Specify payment code","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u043f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u043f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 \u043a\u043e\u0434"},"example":"29348"}],"amount_min":2,"amount_max":14999}```  
