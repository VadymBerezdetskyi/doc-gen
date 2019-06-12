## General 
**Code:** `express-nikopol-oplata-po-imeni_uah`  
**Method:** `express-nikopol-oplata-po-imeni`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `20`  to `1000`  UAH ## Fields 
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
: [en] I’m sposyvača  
: [uk] Iм'я споживача  
: [ru] Имя потребителя  
Hint:  
: [en] I’m sposyvača  
: [uk] Iм'я споживача  
: [ru] Имя потребителя  
## JSON Object 
```json
 {"code":"express-nikopol-oplata-po-imeni_uah","method":"express-nikopol-oplata-po-imeni","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"I\u2019m sposyva\u010da","uk":"I\u043c'\u044f \u0441\u043f\u043e\u0436\u0438\u0432\u0430\u0447\u0430","ru":"\u0418\u043c\u044f \u043f\u043e\u0442\u0440\u0435\u0431\u0438\u0442\u0435\u043b\u044f"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"I\u2019m sposyva\u010da","uk":"I\u043c'\u044f \u0441\u043f\u043e\u0436\u0438\u0432\u0430\u0447\u0430","ru":"\u0418\u043c\u044f \u043f\u043e\u0442\u0440\u0435\u0431\u0438\u0442\u0435\u043b\u044f"},"example":"vm-home"}],"amount_min":20,"amount_max":1000}```  
