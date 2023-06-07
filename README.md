# malta-project-backend

Per leggere gli output php bisogna utilizzare una funzione di questo tipo:
async function a(){
  const body = {chiave:valore, ...}
  JSON.parse(await auth/noAuth("tabella/endpoint", body));
}