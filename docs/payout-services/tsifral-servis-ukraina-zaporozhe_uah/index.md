## General 
**Code:** `tsifral-servis-ukraina-zaporozhe_uah`  
**Method:** `tsifral-servis-ukraina-zaporozhe`  
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
: [en] Activation code  
: [uk] Код активації  
: [ru] Код активации  
Hint:  
: [en] Enter activation code  
: [uk] Введіть код активації  
: [ru] Введите код активации  
## JSON Object 
```json
 {"code":"tsifral-servis-ukraina-zaporozhe_uah","method":"tsifral-servis-ukraina-zaporozhe","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Activation code","uk":"\u041a\u043e\u0434 \u0430\u043a\u0442\u0438\u0432\u0430\u0446\u0456\u0457","ru":"\u041a\u043e\u0434 \u0430\u043a\u0442\u0438\u0432\u0430\u0446\u0438\u0438"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter activation code","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043a\u043e\u0434 \u0430\u043a\u0442\u0438\u0432\u0430\u0446\u0456\u0457","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043a\u043e\u0434 \u0430\u043a\u0442\u0438\u0432\u0430\u0446\u0438\u0438"},"example":"29925"}],"amount_min":2,"amount_max":14999}```  
