## General 
**Code:** `ooo-sana-plius_uah`  
**Method:** `ooo-sana-plius`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `14999`  UAH ## Fields 
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
: [en] ID  
: [uk] id  
: [ru] id  
Hint:  
: [en] Enter id  
: [uk] Введіть id  
: [ru] Введите id  
## JSON Object 
```json
 {"code":"ooo-sana-plius_uah","method":"ooo-sana-plius","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"id","ru":"id"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter id","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c id","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 id"},"example":"55695"}],"amount_min":10,"amount_max":14999}```  
