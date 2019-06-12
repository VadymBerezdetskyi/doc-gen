## General 
**Code:** `lumina-vyshgorod_uah`  
**Method:** `lumina-vyshgorod`  
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
: [en] Personal account  
: [uk] Особовий рахунок  
: [ru] Личный счёт  
Hint:  
: [en] Enter personal account  
: [uk] Введіть номер особового рахунку  
: [ru] Введите номер личного счёта  
## JSON Object 
```json
 {"code":"lumina-vyshgorod_uah","method":"lumina-vyshgorod","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Personal account","uk":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0447\u043d\u044b\u0439 \u0441\u0447\u0451\u0442"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter personal account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u043b\u0438\u0447\u043d\u043e\u0433\u043e \u0441\u0447\u0451\u0442\u0430"},"example":"617"}],"amount_min":2,"amount_max":14999}```  
