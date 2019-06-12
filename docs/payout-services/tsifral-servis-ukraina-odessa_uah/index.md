## General 
**Code:** `tsifral-servis-ukraina-odessa_uah`  
**Method:** `tsifral-servis-ukraina-odessa`  
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
: [en] The registration code  
: [uk] Код реєстрації  
: [ru] Код регистрации  
Hint:  
: [en] Enter the registration code  
: [uk] Введіть код реєстрації  
: [ru] Введите код регистрации  
## JSON Object 
```json
 {"code":"tsifral-servis-ukraina-odessa_uah","method":"tsifral-servis-ukraina-odessa","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The registration code","uk":"\u041a\u043e\u0434 \u0440\u0435\u0454\u0441\u0442\u0440\u0430\u0446\u0456\u0457","ru":"\u041a\u043e\u0434 \u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0446\u0438\u0438"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter the registration code","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043a\u043e\u0434 \u0440\u0435\u0454\u0441\u0442\u0440\u0430\u0446\u0456\u0457","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043a\u043e\u0434 \u0440\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0446\u0438\u0438"},"example":"078472"}],"amount_min":2,"amount_max":14999}```  
