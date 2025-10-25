export const nettoyerTexte = (texte) => {
  return texte.replace(/<div>|<\/div>/g, '');
};