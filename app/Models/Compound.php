<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compound extends Model
{
    protected $connection = 'mongodb';
    //
    const DEFAULT_STRUCTURE = [
        'id',                   // index
        'project_id',           // index
        'project_type',         // index
        'smiles',               // index
        'chembl_id',            // index
        'mol_name',             // index
        'properties',           // index
        'descriptors',
    ];

    const DEFAULT_PROPERTIES = [
        'molecularweight',
        'formalcharge',
        'chi0n',
        'chi0v',
        'chi1n',
        'chi1v',
        'chi2n',
        'chi2v',
        'chi3n',
        'chi3v',
        'chi4n',
        'chi4v',
        'hallKierAlpha',
        'kappa1',
        'kappa2',
        'kappa3',
        'labuteASA',
        'molarrefractivity',
        'exactmolecularweight',
        'fpmorgandensity1',
        'fpmorgandensity2',
        'fpmorgandensity3',
        'heavyatommolecularweight',
        'maxabspartialcharge',
        'maxpartialcharge',
        'minabspartialcharge',
        'minpartialcharge',
        'numradicalelectrons',
        'numvalenceelectrons',
        'fraction_csp3',
        'heavy_atom_count',
        'num_aliphatic_carbocycles',
        'num_aliphatic_heterocycles',
        'num_aliphatic_rings',
        'num_aromatic_carbocycles',
        'num_aromatic_heterocycles',
        'num_aromatic_rings',
        'num_h_acceptors',
        'num_h_donors',
        'num_heteroatoms',
        'num_rotatable_bonds',
        'num_saturated_carbocycles',
        'num_saturated_heterocycles',
        'num_saturated_rings',
        'ring_count',
        'num_bonds',
        'topographical_polar_surface_area',
        'phi',
        'logp',
        'logd',
    ];

    const DEFAULT_DERIVED_VALUES = [
        'lipinskiruleof5',
        'ghose',
        'veber',
        'ruleof3',
        'reos',
        'druglike',
    ];

    const DEFAULT_DESCRIPTORS = [
        'smiles',
        'inchi',
        'inchikey',
        'molblock',
        'aromatic_form',
        'kekule_form',
        'v3Kmolblock',
        'morgan_fp',
        'pattern_fp',
    ];

    /**
     * @return BelongsTo
     */
    public function Project(): BelongsTo {
        return $this->belongsTo(Project::class);
    }
}
