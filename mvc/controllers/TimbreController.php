<?php
namespace App\Controllers;
use App\Models\Timbre;
use App\Models\Image;
use App\Providers\Validator;
use App\Providers\View; 
use App\Providers\Auth;
class TimbreController {

    public function __construct()
    {
        Auth::session();
    }

    public function create() {
        return View::render('timbre/create');
    }

    public function store($data){
        if (isset($_SESSION['id'])) {
            $userId = $_SESSION['id'];
    
            $validator = new Validator;
            $validator->field('nom', $data['nom'], 'Le nom')->min(3)->max(100);
            $validator->field('description', $data['description'])->max(255);
            $validator->field('annee', $data['annee'])->required();
            $validator->field('pays', $data['pays'])->required();
            $validator->field('certifie', $data['certifie'])->required();
            $validator->field('etat_timbre', $data['etat_timbre'])->required();
        
            if ($validator->isSuccess()) {
                $data['utilisateur_id'] = $userId;
                $timbre = new Timbre;
                $timbreId = $timbre->insert($data);
                
                // Enregistrer les images
                $uploadDir = __DIR__ . '/../uploads/'; // Chemin vers le dossier de téléchargement
                
                if (isset($_FILES['image_principale']) && $_FILES['image_principale']['error'] === UPLOAD_ERR_OK) {
                    $imagePrincipaleName = $_FILES['image_principale']['name'];
                    move_uploaded_file($_FILES['image_principale']['tmp_name'], $uploadDir . $imagePrincipaleName);
                }
                
                if (isset($_FILES['image_secondaire']) && $_FILES['image_secondaire']['error'] === UPLOAD_ERR_OK) {
                    $imageSecondaireName = $_FILES['image_secondaire']['name'];
                    move_uploaded_file($_FILES['image_secondaire']['tmp_name'], $uploadDir . $imageSecondaireName);
                }
                
                $imageData = [
                    'image_principale' => $imagePrincipaleName ?? null,
                    'image_secondaire' => $imageSecondaireName ?? null,
                    'timbre_id' => $timbreId
                ];
    
                $imageModel = new Image;
                $imageModel->insert($imageData);
                
                return $this->index(); 
            } else {
                $errors = $validator->getErrors();
                return View::render('timbre/create', ['errors' => $errors]); // Redirige vers la vue du formulaire avec les erreurs
            }
        }
    }

    public function index()
    {
        if (Auth::session()) {
            $timbre = new Timbre;
            $select = $timbre->selectByUser($_SESSION['id']);

            if ($select) {
                return View::render('timbre/index', ['timbres' => $select]);
            } else {
                return View::render('error');
            }
        }
    }
    
    public function show()
{
    // Vérifiez d'abord si l'ID du timbre est passé en paramètre GET
    if (isset($_GET['id'])) {
        $timbreId = $_GET['id'];
        
        // Utilisez la méthode selectId pour récupérer les détails du timbre
        $timbreModel = new Timbre();
        $timbre = $timbreModel->selectId($timbreId);
        
        // Si le timbre est trouvé
        if ($timbre) {
            $imageModel = new Image();
            $images = $imageModel->selectByTimbreId($timbre['id']);

            return View::render('timbre/show', ['timbre' => $timbre, 'image' => $images]);
        } else {
            echo "Erreur : Le timbre avec l'ID $timbreId n'a pas été trouvé.";
        }
    } else {
        echo "Erreur : Aucun ID de timbre spécifié dans les paramètres GET.";
    }
}

    

    
}

