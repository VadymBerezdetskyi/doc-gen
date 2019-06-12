## General 
**Code:** `chernoe-more-internet_uah`  
**Method:** `chernoe-more-internet`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14999`  UAH ## Fields 
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
: [en] Personal account number  
: [uk] Номер особового рахунку  
: [ru] Номер лицевого счета  
Hint:  
: [en] Personal account number  
: [uk] Номер особового рахунку  
: [ru] Номер лицевого счета  
## JSON Object 
```json
 {"code":"chernoe-more-internet_uah","method":"chernoe-more-internet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Personal account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Personal account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"example":"132701"}],"amount_min":1,"amount_max":14999}```  
