export const nettoyerTexte = (texte) => {
  return texte.replace(/<div>|<\/div>/g, '');
};

export const backPublicPath = "http://localhost:8000/uploads/";